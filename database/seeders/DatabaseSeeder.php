<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'first_name' => "Mohamed",
        	'last_name' => 'Nicer',
        	'email' => 'fssm@alumni.com',
        	'phone' => '0606060606',
        	'gender' => 'Male',
        	'cin' => 'EE000000',
        	'date' => '2000-01-01 00:00:00',
        	'status' => 'Admin',
        	'request' => 'Accepted',
        	'account' => 'Enabled',
        	'password' => bcrypt('secret'),
        ]);
    }
}
