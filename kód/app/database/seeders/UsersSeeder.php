<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user -> name = 'admin1';
        $user -> email = 'admin1@email.com';
        $user -> password = hash::make('admin1');
        $user ->isAdmin = 1;
        $user -> save();


        // $users = new user;
        // $users -> name = 'bela';
        // $users -> email = 'bela@email.com';
        // $users -> password = 'belapwd';
        // $users ->isAdmin = 0;
        // $users -> save();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
