<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageLinesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->format('Y-m-d H:i:s');
        $language_lines = array(
            0 =>
            array(
                'id' => 1,
                'group' => 'lfm',
                'key' => 'sign_in',
                'text' => '{"en":"Sign In","id":"Masuk"}',
                'created_at' => $now,
                'updated_at' => $now,
            ),
            1 =>
            array(
                'id' => 2,
                'group' => 'lfm',
                'key' => 'sign_out',
                'text' => '{"en":"Sign Out","id":"Keluar"}',
                'created_at' => $now,
                'updated_at' => $now,
            ),
            2 =>
            array(
                'id' => 3,
                'group' => 'lfm',
                'key' => 'sign_up',
                'text' => '{"en":"Sign Up","id":"Daftar"}',
                'created_at' => $now,
                'updated_at' => $now,
            ),
            3 =>
            array(
                'id' => 4,
                'group' => 'lfm',
                'key' => 'forgot_password',
                'text' => '{"en":"Forgot Password","id":"Lupa Password"}',
                'created_at' => $now,
                'updated_at' => $now,
            ),
            4 =>
            array(
                'id' => 5,
                'group' => 'lfm',
                'key' => 'login',
                'text' => '{"en":"Login","id":"Masuk"}',
                'created_at' => $now,
                'updated_at' => $now,
            ),
            5 =>
            array(
                'id' => 6,
                'group' => 'lfm',
                'key' => 'remember_me',
                'text' => '{"en":"Remember Me","id":"Ingat Saya"}',
                'created_at' => $now,
                'updated_at' => $now,
            ),
            6 =>
            array(
                'id' => 7,
                'group' => 'lfm',
                'key' => 'email',
                'text' => '{"en":"Email","id":"Email"}',
                'created_at' => $now,
                'updated_at' => $now,
            ),
            7 =>
            array(
                'id' => 8,
                'group' => 'lfm',
                'key' => 'password',
                'text' => '{"en":"Password","id":"Kata sandi"}',
                'created_at' => $now,
                'updated_at' => $now,
            ),
            8 =>
            array(
                'id' => 9,
                'group' => 'lfm',
                'key' => 'dashboard',
                'text' => '{"en":"Dashboard","id":"Dasbor"}',
                'created_at' => $now,
                'updated_at' => $now,
            ),
        );

        // Checking if the table already have a query
        if (is_null(DB::table('language_lines')->first()))
            DB::table('language_lines')->insert($language_lines);
        else
            echo "\e[31mTable is not empty, therefore NOT ";
    }
}
