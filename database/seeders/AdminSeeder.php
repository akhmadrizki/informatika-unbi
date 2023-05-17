<?php

namespace Database\Seeders;

use App\Models\Enums\RoleUserType;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'name'              => 'Akhmad Rizki Prayoga',
                'username'          => 'r1zki',
                'email'             => 'developer@himalaya.com',
                'role'              => RoleUserType::developer(),
                'email_verified_at' => Carbon::now()->toDateTimeString(),
                'password'          => Hash::make('wasd!@#$%'),
                'created_at'        => Carbon::now()->toDateTimeString(),
                'updated_at'        => Carbon::now()->toDateTimeString(),
            ]
        ]);
    }
}
