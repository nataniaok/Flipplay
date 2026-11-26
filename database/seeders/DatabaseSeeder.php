<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            ['name' => 'Budi', 'email' => 'budi@flipplay.test', 'plan' => 'Free'],
            ['name' => 'Sari', 'email' => 'sari@flipplay.test', 'plan' => 'Premium'],
            ['name' => 'Andi', 'email' => 'andi@flipplay.test', 'plan' => 'Free'],
        ];

        foreach ($users as $user) {
            User::create($user + ['password' => 'password']);
        }

        $this->call(MediaSeeder::class);
    }
}
