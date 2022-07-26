<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name'          => 'John Doe',
            'email'         => 'john@example.com',
            'password'      => bcrypt('password'),
        ]);
    }
}
