<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Images extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'group' => 'kuliner-madura',
                'directory' => 'images/',
                'filename' => 'bebek-sinjai.jpg',
            ],
            [
                'group' => 'kuliner-madura',
                'directory' => 'images/',
                'filename' => 'bebek-sinjai-front.jpg',
            ],


        ];
        DB::table('images')->insert($users);
    }
}
