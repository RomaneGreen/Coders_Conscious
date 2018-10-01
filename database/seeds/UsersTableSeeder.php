<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $user = App\User::Create([
            'name' => 'Romane G',
            'email' => 'romane71193@gmail.com',
            'password' => bcrypt('password'),
            'admin' => 1,
        ]);
        App\Profile::Create([
            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/1.png',
            'about' => 'Lorem10',
            'facebook' => 'facebook.com',
            'youtube' => 'Youtube.com',
        ]);
    }
}
