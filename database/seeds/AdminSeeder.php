<?php

use App\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'role_id' => 1,
            'email' => 'admin@mail.com',
            'password' => Hash::make("passwordadmin123")
        ]);
    }
}
