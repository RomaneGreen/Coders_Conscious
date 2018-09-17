<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        App\User::Create([
            'name' => 'Romane G',
            'email' => 'romane71193@gmail.com',
            'password' => bcrypt('password'),
        ]);
    }
}
