<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'first_name' => "Admin",
            'last_name' => "User",
            'email' => 'admin@admin.com',
            'password' => \Hash::make('123456'),
            'user_type' => 'admin',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
