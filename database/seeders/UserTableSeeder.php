<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
 use App\Models\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
                	[
                		'name' => 'Hunter',
        		        'email' => 'hunter@gmail.com',
        		        'email_verified_at' => now(),
        		        'password' => bcrypt('12345678'),
        		        'role_id' => 1
        		    ],

        		    [
                		'name' => 'Shazahan',
        		        'email' => 'shazahan@gmail.com',
        		        'email_verified_at' => now(),
        		        'password' => bcrypt('12345678'),
        		        'role_id' => 4
        		    ]
                ]);
    }
}
