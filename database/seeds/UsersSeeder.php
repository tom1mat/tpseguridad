<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'      => 'Juan López',
            'email'     => 'paciente@gmail.com',
            'password'  => bcrypt('paciente'),
            'dni'       => '12345678',
            'prepaid_id'=> 1,
            'role_id'   => 1
        ]);

        DB::table('users')->insert([
            'name'      => 'Luciana Ramírez',
            'email'     => 'secretaria@gmail.com',
            'password'  => bcrypt('secretaria'),
            'prepaid_id'=> null,
            'role_id'   => 2
        ]);

        DB::table('users')->insert([
            'name'      => 'Franco Petrone',
            'email'     => 'doctor@gmail.com',
            'password'  => bcrypt('doctor'),
            'prepaid_id'=> null,
            'role_id'   => 3
        ]);

        DB::table('users')->insert([
            'name'      => 'Administrador',
            'email'     => 'admin@gmail.com',
            'password'  => bcrypt('admin'),
            'prepaid_id'=> null,
            'role_id'   => 4
        ]);
    }
}
