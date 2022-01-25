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
        	'first_name' => "Amal",
        	'last_name' => 'Ait',
        	'email' => 'amal@gmail.com',
        	'phone' => '0607060606',
        	'gender' => 'Female',
        	'cin' => 'YE000000',
        	'date' => '2000-02-01 00:00:00',
        	'status' => 'Admin',
        	'request' => 'Accepted',
        	'account' => 'Enabled',
        	'password' => bcrypt('amalamoula'),
        ]);
		
    }
}
