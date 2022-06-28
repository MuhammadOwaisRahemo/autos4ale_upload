<?php

namespace App\Http\Controllers\Administrator;

use App\Models\Admin as Staff;
use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Services\Slug;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StaffController extends Controller
{
    public function index(Request $request)
    {
        if (\Auth::user('admin')->can('staff-read') != TRUE) {
            abort(403, 'Unauthorized action.');
        }
        $data = array(
            'title' => 'All Staff Users',
            'users' => Staff::where('id', '!=', auth('admin')->user()->id)->latest()->paginate(10)
        );
        return view('admin.users.all_users')->with($data);
    }

    public function add()
    {
        if (\Auth::user('admin')->can('staff-write') != TRUE) {
            abort(403, 'Unauthorized action.');
        }
        $data = array(
            'title' => 'Add Staff User',
            'roles' => Role::get(),
        );
        return view('admin.users.add_user')->with($data);
    }

    public function edit(Request $request)
    {
        if (\Auth::user('admin')->can('staff-update') != TRUE) {
            abort(403, 'Unauthorized action.');
        }
        $user = Staff::hashidOrFail($request->user_id);
        $data = array(
            'title' => 'Edit Staff User',
            'user' => $user,
            'roles' => Role::get(),
        );
        return view('admin.users.add_user')->with($data);
    }

    public function save(Request $request, Slug $slug)
    {
        $rules = [
            'first_name' => ['required', 'string', 'max:80'],
            'last_name' => ['required', 'string', 'max:80'],
            'user_type' => ['required', 'string', 'in:admin,normal'],
            'email' => ['required', 'string', 'email', 'max:190'],
        ];

        if (!$request->user_id) {
            $rules['password'] = ['required', 'string', 'min:8'];
        }

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return ['errors' => $validator->errors()];
        }


        if ($request->user_id) {
            $staff = Staff::hashidFind($request->user_id);
            $msg = [
                'success' => 'Staff User has been updated',
                'reload' => true,
            ];
        } else {
            $staff = new Staff();
            $staff->added_by_id = auth()->user()->id;
            $staff->is_active = 1;
            $staff->password = \Hash::make($request->password);

            $msg = [
                'success' => 'Staff User has been added',
                'redirect' => route('admin.staff'),
            ];
        }

        if ($request->hasFile('profile_img')) {
            $profile_img = \CommonHelpers::uploadSingleFile($request->file('profile_img'), 'uploads/profile_images/');
            if (is_array($profile_img)) {
                return response()->json($profile_img);
            }
            if (file_exists($staff->image)) {
                @unlink($staff->image);
            }
            $staff->image = $profile_img;
        }
        if ($request->role) {
            $user_permissions = Role::find($request->role)->user_permissions;
            $staff->user_permissions = $user_permissions;
            $staff->role_id = $request->role;
        }
        $staff->email = $request->email;
        $staff->first_name = $request->first_name;
        $staff->last_name = $request->last_name;
        $staff->user_type = $request->user_type;
        $staff->save();

        return response()->json($msg);
    }


    public function update_password(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);

        if ($validator->fails()) {
            return ['errors' => $validator->errors()];
        }

        $msg = [
            'success' => 'Staff User password has been updated',
            'reload' => true,
        ];

        $staff = Staff::hashidFind($request->user_id);
        $staff->password = \Hash::make($request->password);
        $staff->save();

        return response()->json($msg);
    }

    public function delete(Request $request)
    {
        if (\Auth::user('admin')->can('staff-delete') != TRUE) {
            abort(403, 'Unauthorized action.');
        }
        $staff = Staff::hashidFind($request->user_id);
        $staff->delete();
        return response()->json([
            'success' => 'Staff User deleted successfully',
            'remove_tr' => true
        ]);
    }

    public function updateStatus(Request $request)
    {
        if (\Auth::user('admin')->can('staff-update') != TRUE) {
            abort(403, 'Unauthorized action.');
        }
        $staff = Staff::hashidFind($request->user_id);
        $staff->is_active = !$staff->is_active;
        $staff->save();
        return response()->json([
            'success' => 'Staff User Status Updated Successfully',
            'reload' => true
        ]);
    }

    public function update_profile(Request $request)
    {
        $data = array(
            'title' => 'Edit Profile',
            'user' => Staff::find(auth('admin')->user()->id)
        );
        return view('admin.users.edit_profile')->with($data);
    }

    public function save_profile(Request $request)
    {
        $rules = [
            'first_name' => ['required', 'string', 'max:80'],
            'last_name' => ['required', 'string', 'max:80'],
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return ['errors' => $validator->errors()];
        }

        $staff = Staff::find(auth('admin')->user()->id);

        if ($request->hasFile('profile_img')) {
            $profile_img = \CommonHelpers::uploadSingleFile($request->file('profile_img'), 'upload/profile_images/');
            if (is_array($profile_img)) {
                return response()->json($profile_img);
            }
            if (file_exists($staff->image)) {
                @unlink($staff->image);
            }
            $staff->image = $profile_img;
        }

        $staff->first_name = $request->first_name;
        $staff->last_name = $request->last_name;
        $staff->save();

        $msg = [
            'success' => 'Your profile has been updated',
            'reload' => true,
        ];

        return response()->json($msg);
    }

    public function change_password(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'old_password' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);

        if ($validator->fails()) {
            return ['errors' => $validator->errors()];
        }

        $msg = [
            'success' => 'Your password has been changed',
            'reload' => true,
        ];

        $staff = Staff::find(auth()->user()->id);

        if (!(\Hash::check($request->old_password, $staff->password))) {
            return response()->json([
                'error' => 'Your current password does not matches with the password you provided. Please try again.',
            ]);
        }

        if (strcmp($request->old_password, $request->password) == 0) {
            return response()->json([
                'error' => 'New Password cannot be same as your current password. Please choose a different password.',
            ]);
        }

        $staff->password = \Hash::make($request->password);
        $staff->save();

        return response()->json($msg);
    }
}
