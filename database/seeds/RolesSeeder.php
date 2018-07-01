<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'role' => 'Patient',
        ]);
        DB::table('roles')->insert([
            'role' => 'Secreatary',
        ]);
        DB::table('roles')->insert([
            'role' => 'Doctor',
        ]);
        DB::table('roles')->insert([
            'role' => 'Admin',
        ]);
    }
}
