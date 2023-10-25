<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Settings extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'lookup' => 'whatsapp-primary-admin',
                'value' => 'https://wa.me/628334433222',
            ],
            [
                'lookup' => 'whatsapp-admin-1',
                'value' => 'https://wa.me/628334433111',
            ],
            [
                'lookup' => 'whatsapp-admin-2',
                'value' => 'https://wa.me/628334433444',
            ],
            [
                'lookup' => 'text-template-wa-kuliner',
                'value' => 'Halo Admin, bla bla bla',
            ],


        ];
        DB::table('settings')->insert($users);
    }
}
