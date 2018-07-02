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
        // PACIENTES

        DB::table('users')->insert([
            'name'      => 'Juan López',
            'email'     => 'paciente1@gmail.com',
            'password'  => bcrypt('paciente1'),
            'dni'       => (string)rand(30000000,50999999),
            'prepaid_id'=> 1,
            'role_id'   => 1
        ]);

        DB::table('users')->insert([
            'name'      => 'Federico Martinez',
            'email'     => 'paciente2@gmail.com',
            'password'  => bcrypt('paciente2'),
            'dni'       => (string)rand(30000000,50999999),
            'prepaid_id'=> 1,
            'role_id'   => 1
        ]);

        // SECRETARIAS

        DB::table('users')->insert([
            'name'      => 'Luciana Ramírez',
            'email'     => 'secretaria1@gmail.com',
            'password'  => bcrypt('secretaria1'),
            'dni'       => (string)rand(30000000,50999999),
            'prepaid_id'=> null,
            'role_id'   => 2
        ]);

        DB::table('users')->insert([
            'name'      => 'Gabriela Perez',
            'email'     => 'secretaria2@gmail.com',
            'password'  => bcrypt('secretaria2'),
            'dni'       => (string)rand(30000000,50999999),
            'prepaid_id'=> null,
            'role_id'   => 2
        ]);

        // DOCTORES

        DB::table('users')->insert([
            'name'      => 'Franco Petrone',
            'email'     => 'doctor1@gmail.com',
            'password'  => bcrypt('doctor1'),
            'dni'       => (string)rand(30000000,50999999),
            'prepaid_id'=> null,
            'role_id'   => 3
        ]);

        DB::table('users')->insert([
            'name'      => 'Tomás Mateo',
            'email'     => 'doctor2@gmail.com',
            'password'  => bcrypt('doctor2'),
            'dni'       => (string)rand(30000000,50999999),
            'prepaid_id'=> null,
            'role_id'   => 3
        ]);

        DB::table('users')->insert([
            'name'      => 'Agustín Fontova',
            'email'     => 'doctor3@gmail.com',
            'password'  => bcrypt('doctor3'),
            'dni'       => (string)rand(30000000,50999999),
            'prepaid_id'=> null,
            'role_id'   => 3
        ]);

        DB::table('users')->insert([
            'name'      => 'Sebastian Díaz',
            'email'     => 'doctor4@gmail.com',
            'password'  => bcrypt('doctor4'),
            'dni'       => (string)rand(30000000,50999999),
            'prepaid_id'=> null,
            'role_id'   => 3
        ]);

        // ADMINISTRADOR

        DB::table('users')->insert([
            'name'      => 'Administrador',
            'email'     => 'admin@gmail.com',
            'password'  => bcrypt('admin'),
            'prepaid_id'=> null,
            'role_id'   => 4
        ]);
    }
}
