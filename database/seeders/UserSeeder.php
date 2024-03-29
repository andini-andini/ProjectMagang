<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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
        DB::table('users')->insert([
            'name' => 'Admin2',
            'email' => 'admin2@gmail.com',
            'departement_id' => '1',
            'role' => 'adm',
            'password' => Hash::make('admin1234')
        ]);
    }
}
