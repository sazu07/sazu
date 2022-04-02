<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Role::insert([
        	['name' => 'Admin'],
        	['name' => 'Editor'],
        	['name' => 'Author'],
        	['name' => 'Customer']
        ]);
    }
}
