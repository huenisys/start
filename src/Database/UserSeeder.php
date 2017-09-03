<?php

namespace Huenisys\Start\Database;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'name' => 'Paul',
            'email' => 'paul@huenits.com',
            'password' => bcrypt('password'),
        ]);
    }
}
