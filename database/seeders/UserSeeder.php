<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Mirza Md. Golam Nabi',
            'phone' => '01825712671',
            'email' => 'golamnabi411330@gmail.com',
            'user_type_id' => 1,
            'password' => 12345678,
        ]);
    }
}
