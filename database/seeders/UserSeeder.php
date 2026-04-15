<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(5)->create();

        $name = 'Ahmad Kiflan Wafi';
        User::factory()->create(
            [
                'name' => $name,
                'username' => Str::slug($name),
                'email' => 'ahmadkiflan2020@gmail.com',
                'password' => Hash::make('windwalk003'),
            ]);
    }
}
