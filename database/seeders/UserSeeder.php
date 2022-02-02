<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::truncate();
        User::created([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => 'admin',
            'status' => 'Admin',
            'remember_token' => Str::random(60)
        ]);
        
    }
}
