<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Tanang Satriyo',
            'assign' => '19042000',
            'is_admin' => '1',
            'email' => 'ta@gmail.com',
            'password' => bcrypt('123qweasd')
        ]);
    }
}
