<?php

namespace Database\Seeders;

use App\Models\CarAdCategory;
use Illuminate\Database\Seeder;

class CarAdCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data[0] = ['name' => 'car', 'slug' => 'car', 'created_at' => date('Y-m-d h:i:s')];
        $data[1] = ['name' => 'van', 'slug' => 'van', 'created_at' => date('Y-m-d h:i:s')];
        $data[2] = ['name' => 'bike', 'slug' => 'bike','created_at' => date('Y-m-d h:i:s')];
        $data[3] = ['name' => 'motorhome', 'slug' => 'motorhome','created_at' => date('Y-m-d h:i:s')];
        $data[4] = ['name' => 'caravan', 'slug' => 'caravan','created_at' => date('Y-m-d h:i:s')];
        $data[5] = ['name' => 'truck', 'slug' => 'truck','created_at' => date('Y-m-d h:i:s')];

        CarAdCategory::insert($data);
    }
}
