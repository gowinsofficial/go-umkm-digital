<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Services extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'group' => 'website',
                'sub_group' => 'website',
                'template_wa' => 'Halo Admin, saya ingin membuat website..',
            ],
            [
                'group' => 'ecommerce',
                'sub_group' => 'shopee',
                'template_wa' => 'Halo Admin, saya ingin membuat lapak shopee',
            ],
            [
                'group' => 'ecommerce',
                'sub_group' => 'tiktok',
                'template_wa' => 'Halo Admin, saya ingin membuat akun tiktok shop..',
            ],

        ];
        DB::table('services')->insert($users);
    }
}
