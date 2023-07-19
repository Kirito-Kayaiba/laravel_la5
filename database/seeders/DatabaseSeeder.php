<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        \App\Models\User::factory(10)->create();
        \DB::table('users')->insert([
            'name' => 'Test User',
            'email' => 'test1@example.com',
            'password' => bcrypt('hehe'),
            'idgroup' => 1, 'diachi' => 'Hà Nội',
        ]);
        \DB::table('users')->insert([
            'name' => 'Test User 2',
            'email' => 'test2@example',
            'password' => bcrypt('huhu'),
            'idgroup' => 2, 'diachi' => 'Hà Nội',
        ]);
        \DB::table('users')->insert([
            'name' => 'Test User 3',
            'email' => 'test3@example',
            'password' => bcrypt('hihi'),
            'idgroup' => 3, 'diachi' => 'Hà Nội',
        ]);
    }
}
