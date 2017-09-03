<?php

namespace Huenisys\Start\Database;

use Illuminate\Database\Seeder;

class Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(UserSeeder::class);
    }
}
