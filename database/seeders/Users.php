<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Faisol',
                'username' => 'faisol',
                'password' => Hash::make('faisol')
            ],
            [
                'name' => 'Wahyu',
                'username' => 'wahyu',
                'password' => Hash::make('wahyu')
            ],
            [
                'name' => 'Imam',
                'username' => 'imam',
                'password' => Hash::make('imam')
            ],

        ];
        DB::table('users')->insert($users);
    }
}
