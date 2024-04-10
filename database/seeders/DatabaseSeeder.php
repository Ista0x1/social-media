<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Profile;
use \App\Models\Thread;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = User::factory(10)->create();

        $user = User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@multividas.com',
        ]);
        Profile::factory()->for($user)->create();
        Thread::factory()->count(3)->for($user)->create();
        foreach ($users as $user) {
            Profile::factory()->for($user)->create();
            Thread::factory()->count(4)->for($user)->create();
        }
    }
}
