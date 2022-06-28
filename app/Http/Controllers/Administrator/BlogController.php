<?php

namespace App\Http\Controllers\Administrator;

use App\Helpers\CommonHelpers;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogTag;
use App\Models\CarAdCategory;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    public function index(Request $request)
	{
		$blogs = Blog::with('blog_tag.tags','category');

		// if (!empty($request->tag) && $request->tag != 'all') {
            // 	$blogs = $blogs->whereHas('blogTag.Tags', function ($q) use ($request) {
            // 		$q->where('tag_id', $request->tag);
            // 	});
            // }

            // if (!empty($request->title)) {
            // 	$blogs = $blogs->where('title', 'LIKE', "%{$request->title}%");
            // }


            // if (isset($request->start) && isset($request->end)) {
            // 	$dateS = new Carbon($request->start);
            // 	$dateE = new Carbon($request->end);
            // 	$blogs = $blogs->whereBetween('created_at', [$dateS->format('Y-m-d') . " 00:00:00", $dateE->format('Y-m-d') . " 23:59:59"]);
		// }

		$data = array(
			'title' => 'Blogs',
			'request' => @$request,
			'all_blogs' => $blogs->latest()->paginate(10),
		);
		return view('admin.blogs.index')->with($data);
	}

	public function add()
	{
		$data = array(
			'title' => 'Add Blog',
			'tags' => Tag::get(['id', 'name']),
            'categories' => CarAdCategory::all(),
		);
		return view('admin.blogs.add')->with($data);
	}

	public function save(Request $request)
	{
		$rules = [
			'title' => ['required', 'string', 'max:500'],
			'description' => ['required'],
			'category_id' => ['required'],

		];

		if ($request->hasFile('blog_img')) {
			$rules['blog_img'] = ['required','image','mimes:jpeg,png,jpg','dimensions:width=1161,height=374'];
            $customMessage = [
                'blog_img.dimensions' => 'The blog image has invalid dimensions. Image dimensions must be should (1161 px X 374 px) !.',
            ];
            $validator = Validator::make($request->all(), $rules, $customMessage );
            if ($validator->fails()) {
                return ['errors' => $validator->errors()];
            }
		}

		$validator = Validator::make($request->all(), $rules);
		if ($validator->fails()) {
			return ['errors' => $validator->errors()];
		}

        $blog = new  Blog();
		if ($request->id) {
			$blog = $blog::hashidFind($request->id);
			$msg = [
				'success' => 'Blog Successfully Updated.',
				'redirect' => route('admin.blogs'),
			];
		} else {
			$msg = [
				'success' => 'Blog Successfully Added.',
				'redirect' => route('admin.blogs'),
			];
		}

		if ($request->hasFile('blog_img')) {
			$image = CommonHelpers::uploadSingleFile($request->file('blog_img'), 'admin_assets/uploads/Blogs/');
			if (is_array($image)) {
				return response()->json($image);
			}
			if (file_exists($blog->image)) {
				@unlink($blog->image);
			}
			$blog->image = $image;
		}

		$blog->category_id = $request->category_id;
		$blog->title = $request->title;
		$blog->description = $request->description;
		$blog->status = $request->status;
		$blog->save();

        if ($request->tags) {
            foreach ($request->tags as $tagName) {
                Tag::firstOrCreate(['name' => $tagName])->save();
            }

            $tags = Tag::whereIn('name', $request->tags)->pluck('id');

            $blog->tags()->sync($tags);
        }

		return response()->json($msg);
	}

	public function edit($id)
	{
		$blog = Blog::with('blog_tag')->hashidFind($id);
		$data = array(
			'title' => 'Edit Blog',
			'edit' => $blog,
			'tags' => Tag::get(['id', 'name']),
            'categories' => CarAdCategory::all(),
		);
		return view('admin.blogs.add')->with($data);
	}

	public function delete($id)
	{
		$blog = Blog::hashidFind($id);
		if (file_exists($blog->image)) {
			@unlink($blog->image);
		}
		BlogTag::where('blog_id', $blog->id)->delete();
		Blog::where('id', $blog->id)->delete();

		return response()->json([
			'success' => 'Blog Successfully Deleted.',
			'remove_tr' => true
		]);
	}
}
