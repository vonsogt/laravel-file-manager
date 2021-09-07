<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Checking if the table already have a query
        if (is_null(DB::table('users')->first())) {
            \App\Models\User::factory()->create([
                'name' =>       'Administrator',
                'email' =>      'admin@admin.com',
                'password' =>   bcrypt('password')
            ]);
        } else {
            echo "\e[31mTable is not empty, therefore NOT ";
        }
    }
}
