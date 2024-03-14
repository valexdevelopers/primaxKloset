<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Database\Factories\AdminFactory;
use App\Models\Admin;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Admin::factory()->count(6)->state(new Sequence(
            ['isSuperAdmin' => true],
            ['isSuperAdmin' => false],
            ['admin_verified_at' => Now()],
            ['admin_verified_at' => Null],
            
        ))->create();
    }
}
