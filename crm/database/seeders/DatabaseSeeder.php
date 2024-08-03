<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('admin@admin.com'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        echo "User has been seeded. \n";
    }
}
