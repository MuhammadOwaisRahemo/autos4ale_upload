<?php

namespace Database\Seeders;

use App\Models\CarAdSubCategory;
use Illuminate\Database\Seeder;

class CarAdSubCatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data[0] = ['category_id' => 1, 'name' => 'new', 'created_at' => date('Y-m-d h:i:s')];
        $data[1] = ['category_id' => 1, 'name' => 'used', 'created_at' => date('Y-m-d h:i:s')];
        $data[2] = ['category_id' => 1, 'name' => 'electric', 'created_at' => date('Y-m-d h:i:s')];
        $data[3] = ['category_id' => 1, 'name' => 'sports', 'created_at' => date('Y-m-d h:i:s')];
        $data[4] = ['category_id' => 1, 'name' => 'luxry', 'created_at' => date('Y-m-d h:i:s')];
        $data[5] = ['category_id' => 2, 'name' => 'new', 'created_at' => date('Y-m-d h:i:s')];
        $data[6] = ['category_id' => 2, 'name' => 'used', 'created_at' => date('Y-m-d h:i:s')];
        $data[7] = ['category_id' => 2, 'name' => 'electric', 'created_at' => date('Y-m-d h:i:s')];
        $data[8] = ['category_id' => 3, 'name' => 'new', 'created_at' => date('Y-m-d h:i:s')];
        $data[9] = ['category_id' => 3, 'name' => 'used', 'created_at' => date('Y-m-d h:i:s')];
        $data[10] = ['category_id' => 3, 'name' => 'electric', 'created_at' => date('Y-m-d h:i:s')];
        $data[11] = ['category_id' => 4, 'name' => 'new', 'created_at' => date('Y-m-d h:i:s')];
        $data[12] = ['category_id' => 4, 'name' => 'used', 'created_at' => date('Y-m-d h:i:s')];
        $data[13] = ['category_id' => 5, 'name' => 'new', 'created_at' => date('Y-m-d h:i:s')];
        $data[14] = ['category_id' => 5, 'name' => 'used', 'created_at' => date('Y-m-d h:i:s')];
        $data[15] = ['category_id' => 6, 'name' => 'new', 'created_at' => date('Y-m-d h:i:s')];
        $data[16] = ['category_id' => 6, 'name' => 'used', 'created_at' => date('Y-m-d h:i:s')];

        CarAdSubCategory::insert($data);
    }
}
