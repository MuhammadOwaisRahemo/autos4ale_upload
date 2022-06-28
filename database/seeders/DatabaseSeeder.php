<?php

namespace Database\Seeders;

// use App\Models\CarAdCategory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AdminSeeder::class,
            CarAdCategorySeeder::class,
            CarAdSubCatSeeder::class,
            // PermissionType::class,
            // PermissionSeed::class,
        ]);
    }
}
