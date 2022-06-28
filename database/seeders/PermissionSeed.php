<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data[0] = [
            'permission_type_id' => 1,
            'name' => 'Dashboard Read',
            'slug' => 'dashboard-read',
            'created_at' => date('Y-m-d h:i:s')
        ];

        $data[1] = [
            'permission_type_id' => 2,
            'name' => 'Element Type Read',
            'slug' => 'element-type-read',
            'created_at' => date('Y-m-d h:i:s')
        ];
        $data[2] = [
            'permission_type_id' => 2,
            'name' => 'Element Type Write',
            'slug' => 'element-type-write',
            'created_at' => date('Y-m-d h:i:s')
        ];
        $data[3] = [
            'permission_type_id' => 2,
            'name' => 'Element Type Update',
            'slug' => 'element-type-update',
            'created_at' => date('Y-m-d h:i:s')
        ];
        $data[4] = [
            'permission_type_id' => 2,
            'name' => 'Element Type Delete',
            'slug' => 'element-type-delete',
            'created_at' => date('Y-m-d h:i:s')
        ];

        $data[5] = [
            'permission_type_id' => 3,
            'name' => 'Category Read',
            'slug' => 'category-read',
            'created_at' => date('Y-m-d h:i:s')
        ];
        $data[6] = [
            'permission_type_id' => 3,
            'name' => 'Category Write',
            'slug' => 'category-write',
            'created_at' => date('Y-m-d h:i:s')
        ];
        $data[7] = [
            'permission_type_id' => 3,
            'name' => 'Category Update',
            'slug' => 'category-update',
            'created_at' => date('Y-m-d h:i:s')
        ];
        $data[8] = [
            'permission_type_id' => 3,
            'name' => 'Category Delete',
            'slug' => 'category-delete',
            'created_at' => date('Y-m-d h:i:s')
        ];

        $data[9] = [
            'permission_type_id' => 4,
            'name' => 'Wireframe Read',
            'slug' => 'wireframe-read',
            'created_at' => date('Y-m-d h:i:s')
        ];
        $data[10] = [
            'permission_type_id' => 4,
            'name' => 'Wireframe Write',
            'slug' => 'wireframe-write',
            'created_at' => date('Y-m-d h:i:s')
        ];
        $data[11] = [
            'permission_type_id' => 4,
            'name' => 'Wireframe Update',
            'slug' => 'wireframe-update',
            'created_at' => date('Y-m-d h:i:s')
        ];
        $data[12] = [
            'permission_type_id' => 4,
            'name' => 'Wireframe Delete',
            'slug' => 'wireframe-delete',
            'created_at' => date('Y-m-d h:i:s')
        ];


        $data[13] = [
            'permission_type_id' => 5,
            'name' => 'Customer Read',
            'slug' => 'customer-read',
            'created_at' => date('Y-m-d h:i:s')
        ];
        $data[14] = [
            'permission_type_id' => 5,
            'name' => 'Customer Update',
            'slug' => 'customer-update',
            'created_at' => date('Y-m-d h:i:s')
        ];

        $data[15] = [
            'permission_type_id' => 6,
            'name' => 'Staff Read',
            'slug' => 'staff-read',
            'created_at' => date('Y-m-d h:i:s')
        ];
        $data[16] = [
            'permission_type_id' => 6,
            'name' => 'Staff Write',
            'slug' => 'staff-write',
            'created_at' => date('Y-m-d h:i:s')
        ];
        $data[17] = [
            'permission_type_id' => 6,
            'name' => 'Staff Update',
            'slug' => 'staff-update',
            'created_at' => date('Y-m-d h:i:s')
        ];
        $data[18] = [
            'permission_type_id' => 6,
            'name' => 'Staff Delete',
            'slug' => 'staff-delete',
            'created_at' => date('Y-m-d h:i:s')
        ];

        $data[19] = [
            'permission_type_id' => 7,
            'name' => 'Role Read',
            'slug' => 'role-read',
            'created_at' => date('Y-m-d h:i:s')
        ];
        $data[20] = [
            'permission_type_id' => 7,
            'name' => 'Role Write',
            'slug' => 'role-write',
            'created_at' => date('Y-m-d h:i:s')
        ];
        $data[21] = [
            'permission_type_id' => 7,
            'name' => 'Role Update',
            'slug' => 'role-update',
            'created_at' => date('Y-m-d h:i:s')

        ];
        $data[22] = [
            'permission_type_id' => 7,
            'name' => 'Role Delete',
            'slug' => 'role-delete',
            'created_at' => date('Y-m-d h:i:s')
        ];
        Permission::insert($data);
    }
}
