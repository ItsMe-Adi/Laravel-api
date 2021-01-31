<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username'=>'arkham',
            'first_name' => 'Rahul',
            'last_name' => 'Jain',
            'password' => Hash::make('QAZqaz!@#1234'),
            'email' => 'rahul@docquity.com',
            'country_code'=>'AUS',
            'mobile_number'=>'1234567898',
            'status'=>'NO'
        ]);
    }
}
