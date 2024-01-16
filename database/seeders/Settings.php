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
                'value' => '6281334451615',
            ],
            [
                'lookup' => 'whatsapp-admin-1',
                'value' => '6281334451615',
            ],
            [
                'lookup' => 'whatsapp-admin-2',
                'value' => '6281334451615',
            ],
            [
                'lookup' => 'whatsapp-admin-website',
                'value' => '6281334451615',
            ],
            [
                'lookup' => 'whatsapp-admin-branding',
                'value' => '6281334451615',
            ],
            [
                'lookup' => 'whatsapp-admin-ecommerce',
                'value' => '6281334451615',
            ],
            [
                'lookup' => 'whatsapp-admin-pelatihanmarketing',
                'value' => '6281334451615',
            ],
            [
                'lookup' => 'whatsapp-admin-sponsor',
                'value' => '6281334451615',
            ],
            [
                'lookup' => 'link-video',
                'value' => 'https://www.youtube.com/',
            ],
            [
                'lookup' => 'instagram',
                'value' => 'https://www.instagram.com/',
            ],
            [
                'lookup' => 'email',
                'value' => 'tikatikatika33@gmail.com',
            ],
            [
                'lookup' => 'contact',
                'value' => '6281334451615',
            ],
            [
                'lookup' => 'text-slide-landing',
                'value' => 'UMKM GO Digital Adalah ...',
            ],
            [
                'lookup' => 'syarat-ketentuan',
                'value' => 'Syarat yang diutamakan bisa Whatsapp',
            ],

        ];
        DB::table('settings')->insert($users);
    }
}
