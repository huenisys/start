<?php

use Illuminate\Database\Seeder;
use Huenisys\Start\Database\UserSeeder;

class StartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
    }
}
