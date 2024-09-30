<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user1 = new User();
        $user1->name = 'Admin';
        $user1->email = 'admin@admin.com';
        $user1->password = Hash::make('password');
        $user1->save();

        $user2 = new User();
        $user2->name = 'David';
        $user2->email = 'david@gmail.com';
        $user2->password = Hash::make('password');
        $user2->save();
    }
}
