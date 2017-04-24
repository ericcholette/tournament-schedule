<?php

use Illuminate\Database\Seeder;

class ArenasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('arenas')->insert([
            'name' => 'ARENA'
        ]);
        DB::table('arenas')->insert([
            'name' => 'ANNEX'
        ]);
    }
}
