<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@avengrass.com'],
            [
                'name' => 'avengrassAdmin',
                'password' => Hash::make('avengrass*12*34*67'), // change to a secure password!
                //'is_admin' => true, // optional if you add is_admin column
            ]
        );
    }
}
