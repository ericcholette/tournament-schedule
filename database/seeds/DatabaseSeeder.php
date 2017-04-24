<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DivisionsTableSeeder::class);
        $this->call(ArenasTableSeeder::class);
        $this->call(TeamsTableSeeder::class);
        $this->call(GamesTableSeeder::class);
        // $this->call(UsersTableSeeder::class);
    }
}
