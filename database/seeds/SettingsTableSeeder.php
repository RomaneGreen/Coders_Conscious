<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        App\Setting::Create([
            'site_name' => 'Coders Conscious',
            'contact_number' => '646-272-9312',
            'contact_email' => 'romane71193@gmail.com',
            'address' => 'New York,NY',
        ]);
    }
}
