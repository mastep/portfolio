<?php

namespace Database\Seeders;

use App\Models\User;
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
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test'.Str::random(15).'.@example.com',
        ]);

        // Заполнение данных для Telegram бота
        $this->call([
            ProductSeeder::class,
            QASeeder::class,
        ]);
    }
}
