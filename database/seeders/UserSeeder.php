<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'bob Eponge',
            'email' => 'boby@mail.com',
            'password' => Hash::make('testtest'),
        ]);
        DB::table('users')->insert([
            'name' => 'Arouf Gangsta',
            'email' => 'arouf@mail.com',
            'password' => Hash::make('testtest'),
        ]);
        DB::table('users')->insert([
            'name' => 'steph curry',
            'email' => 'steph@mail.com',
            'password' => Hash::make('testtest'),
        ]);
        DB::table('users')->insert([
            'name' => 'Andrew johnson',
            'email' => 'ason@mail.com',
            'password' => Hash::make('testtest'),
        ]);
    }
}
