<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;
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
        $this->call(PermissionsTableSeeder::class);
        $this->call(UsersTableSeeder::class);

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'bryan_dan@hotmail.es',
            'password' => bcrypt('21012102'),
        ]);

        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => 1,
        ]);
    }
}
