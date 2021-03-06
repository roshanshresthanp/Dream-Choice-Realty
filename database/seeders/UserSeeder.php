<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            array(
                array(
                    'name' => 'Super Admin',
                    'email' => 'super@admin.com',
                    'password' => bcrypt('password'),
                    'role'=> 'office-staff',
                    'address'=> 'Sydney, Australia'
                ),
            ),
        );
    }
}
