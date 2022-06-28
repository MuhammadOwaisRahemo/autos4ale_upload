<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    public function index()
    {
        if (\Auth::user('admin')->can('role-read') != TRUE) {
            abort(403, 'Unauthorized action.');
        }
        $data = array(
            'title' => 'All Roles',
            'roles' => Role::with('user')->latest()->paginate(10),
        );

        return view('admin.role.index')->with($data);
    }

    public function add()
    {
        if (\Auth::user('admin')->can('role-write') != TRUE) {
            abort(403, 'Unauthorized action.');
        }
        $data = array(
            'title' => 'Role Add',
        );

        return view('admin.role.add')->with($data);
    }

    public function save(Request $request)
    {
        $rules = [
            'name' => ['required'],
            'permission' => ['required'],
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return ['errors' => $validator->errors()];
        }
        $role = new Role();
        if ($request->role_id) {
            $role = $role::find($request->role_id);
            $msg = [
                'success' => 'Role has been updated successfully',
                'redirect' => route('admin.roles'),
            ];

            foreach ($request->permission as $permission) {
                $permissions[] = ['name' => $permission];
            }
            $role->name = $request->name;
            $role->user_permissions = $permissions;
            $role->added_by_id = auth()->id();
            $role->save();

            $affected = DB::table('admins')
                ->where('role_id', $role->id)
                ->update(['user_permissions' => json_encode($role->user_permissions)]);
        } else {
            $msg = [
                'success' => 'Role has been added successfully',
                'redirect' => route('admin.roles'),
            ];

            foreach ($request->permission as $permission) {
                $permissions[] = ['name' => $permission];
            }
            $role->name = $request->name;
            $role->user_permissions = $permissions;
            $role->added_by_id = auth()->id();
            $role->save();
            $affected = DB::table('admins')
                ->where('role_id', $role->id)
                ->update(['user_permissions' => json_encode($role->user_permissions)]);
        }


        return response()->json($msg);
    }

    public function edit($id)
    {
        if (\Auth::user('admin')->can('role-update') != TRUE) {
            abort(403, 'Unauthorized action.');
        }
        $editRole =  Role::hashidFind($id);
        $data = array(
            'title' => 'Role Edit',
            'edit' => $editRole,
            'user_permissions' => $editRole->user_permissions,
        );

        return view('admin.role.add')->with($data);
    }

    public function delete($id)
    {
        if (\Auth::user('admin')->can('role-delete') != TRUE) {
            abort(403, 'Unauthorized action.');
        }
        $role = Role::hashidFind($id)->delete();
        return response()->json([
            'success' => 'Role deleted successfully',
            'remove_tr' => true
        ]);
    }
}
