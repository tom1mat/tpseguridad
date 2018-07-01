<?php

use Illuminate\Database\Seeder;

class PrepaidsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prepaids')->insert([
            'prepaid' => 'OSDE',
        ]);
        DB::table('prepaids')->insert([
            'prepaid' => 'Medicus',
        ]);
        DB::table('prepaids')->insert([
            'prepaid' => 'Swiss Medical',
        ]);
    }
}
