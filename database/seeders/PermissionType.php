<?php

namespace Database\Seeders;

use App\Models\PermissionType as ModelsPermissionType;
use Illuminate\Database\Seeder;

class PermissionType extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data[0] = ['name' => 'Dashboard', 'created_at' => date('Y-m-d h:i:s')];
        $data[1] = ['name' => 'Element Type', 'created_at' => date('Y-m-d h:i:s')];
        $data[2] = ['name' => 'Category', 'created_at' => date('Y-m-d h:i:s')];
        $data[3] = ['name' => 'Wireframe', 'created_at' => date('Y-m-d h:i:s')];
        $data[4] = ['name' => 'Customer', 'created_at' => date('Y-m-d h:i:s')];
        $data[5] = ['name' => 'Staff', 'created_at' => date('Y-m-d h:i:s')];
        $data[6] = ['name' => 'Role', 'created_at' => date('Y-m-d h:i:s')];

        ModelsPermissionType::insert($data);
    }
}
