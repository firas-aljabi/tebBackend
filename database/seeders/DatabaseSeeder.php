<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'email' => 'test@gmail.com',
            'password' => md5('123456789'),
            'uuid' => Str::uuid(),
            'is_admin' => true,
        ]);
        $this->call(CountrySeeder::class);
        $this->call(CitySeeder::class);

    }
}
