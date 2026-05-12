<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::updateOrCreate(
            ['username' => '123445'],
            [
                'name' => 'Admin',
                'password' => \Illuminate\Support\Facades\Hash::make('123445'),
            ]
        );
    }
}
