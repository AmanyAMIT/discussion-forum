<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            array(
                'name' => 'user',
                'email' => 'user@gmail.com',
                'password' => Hash::make('123456789'),
                'role_id' => '1'
            ),
            array(
                'name' => 'Amany',
                'email' => 'amany@gmail.com',
                'password' => Hash::make('123456789'),
                'role_id' => '1'
            ),
            array(
                'name' => 'Pierre',
                'email' => 'pierre@gmail.com',
                'password' => Hash::make('123456789'),
                'role_id' => '1'
            ),
            array(
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin123456789'),
                'role_id' => '2'
            )
            
        ]);
    }
}
