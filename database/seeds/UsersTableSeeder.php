<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name'      =>'Admin',
            'Slug'      =>'admin',
            'special'   =>'all-access',
        ]);

        Role::create([
            'name'      =>'Alumno',
            'Slug'      =>'alumno',
        ]);
    }
}
