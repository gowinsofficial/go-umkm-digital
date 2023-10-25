<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(Users::class);
        $this->call(Menus::class);
        $this->call(Images::class);
        $this->call(Settings::class);
        $this->call(Services::class);
    }
}
