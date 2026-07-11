<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class NewAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'yoga@staimas.ac.id'],
            [
                'name'      => 'Yoga',
                'password'  => Hash::make('stmas123'),
                'is_admin'  => true,
            ]
        );

        User::updateOrCreate(
            ['email' => 'wahyu@staimas.ac.id'],
            [
                'name'      => 'Wahyu',
                'password'  => Hash::make('stmas123'),
                'is_admin'  => true,
            ]
        );
    }
}
