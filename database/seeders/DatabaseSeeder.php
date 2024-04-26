<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\CompanySeeder;
use Illuminate\Support\Facades\Hash;
use Database\Seeders\AttendanceSeeder;
use Database\Seeders\PermissionSeeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        User::factory(10)->create();
        User::factory()->create([
            'name' => "Fikri Haikal",
            'email' => 'fikrihaikal568@gmail.com',
            'password' => Hash::make('haikal110599'),
        ]);

        $this->call([
            AttendanceSeeder::class,
            CompanySeeder::class,
            PermissionSeeder::class
        ]);
    }
}