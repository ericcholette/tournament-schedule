<?php

use Illuminate\Database\Seeder;

class DivisionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('divisions')->insert([
            'name' => 'A'
        ]);
        DB::table('divisions')->insert([
            'name' => 'B1'
        ]);
        DB::table('divisions')->insert([
            'name' => 'B2'
        ]);
        DB::table('divisions')->insert([
            'name' => 'C1'
        ]);
        DB::table('divisions')->insert([
            'name' => 'C2'
        ]);
        DB::table('divisions')->insert([
            'name' => 'D'
        ]);
        DB::table('divisions')->insert([
            'name' => 'E1'
        ]);
        DB::table('divisions')->insert([
            'name' => 'E2'
        ]);

    }
}
