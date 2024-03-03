<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Profile;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++) {
            $user = User::create([
                'name' => 'User' . ($i + 1),
                'email' => 'user' . ($i + 1) . '@example.com',
                'password' => Hash::make('password'),
            ]);

            Profile::create([
                'user_id' => $user->id,
                'first_name' => 'First' . ($i + 1),
                'last_name' => 'Last' . ($i + 1),
                'phone' => '123456789' . $i,
            ]);
        }
    }
}
