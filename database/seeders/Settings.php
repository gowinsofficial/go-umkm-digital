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
                'name' => 'Admin Umkm Digital Utama ,Pakai (62xxx)',
                'type' => 'text',
            ],
            [
                'lookup' => 'whatsapp-admin-1',
                'value' => '6281334451615',
                'name' => 'Admin Umkm Digital-1 ,Pakai (62xxx)',
                'type' => 'text',
            ],
            [
                'lookup' => 'whatsapp-admin-2',
                'value' => '6281334451615',
                'name' => 'Admin Umkm Digital-2 ,Pakai (62xxx)',
                'type' => 'text',
            ],
            [
                'lookup' => 'whatsapp-admin-website',
                'value' => '6281334451615',
                'name' => 'Admin Umkm Digital-Website ,Pakai (62xxx)',
                'type' => 'text',
            ],
            [
                'lookup' => 'whatsapp-admin-branding',
                'value' => '6281334451615',
                'name' => 'Admin Umkm Digital-Branding ,Pakai (62xxx)',
                'type' => 'text',
            ],
            [
                'lookup' => 'whatsapp-admin-ecommerce',
                'value' => '6281334451615',
                'name' => 'Admin Umkm Digital-Ecommerce ,Pakai (62xxx)',
                'type' => 'text',
            ],
            [
                'lookup' => 'whatsapp-admin-pelatihanmarketing',
                'value' => '6281334451615',
                'name' => 'Admin Umkm Digital-Pelatihan Marketing ,Pakai (62xxx)',
                'type' => 'text',
            ],
            [
                'lookup' => 'whatsapp-admin-sponsor',
                'value' => '6281334451615',
                'name' => 'Admin Umkm Digital-Sponsor ,Pakai (62xxx)',
                'type' => 'text',
            ],
            [
                'lookup' => 'link-video',
                'value' => 'https://www.youtube.com/',
                'name' => 'Link Video Youtube',
                'type' => 'text',
            ],
            [
                'lookup' => 'instagram',
                'value' => 'https://www.instagram.com/',
                'name' => 'Instagram',
                'type' => 'text',
            ],
            [
                'lookup' => 'email',
                'value' => 'tikatikatika33@gmail.com',
                'name' => 'Email Admin Umkm Digital',
                'type' => 'text',
            ],
            [
                'lookup' => 'contact',
                'value' => '6281334451615',
                'name' => 'Contact Umkm Digital ,Pakai (62xxx)',
                'type' => 'text',
            ],
            [
                'lookup' => 'text-slide-landing',
                'value' => 'UMKM GO Digital Adalah ...',
                'name' => 'Text Slide Landing',
                'type' => 'text',
            ],
            [
                'lookup' => 'syarat-ketentuan',
                'value' => 'Syarat yang diutamakan bisa Whatsapp',
                'name' => 'Syarat Dan Ketentuan',
                'type' => 'text',
            ],
            [
                'lookup' => 'syarat-ketentuan',
                'value' => 'Syarat yang diutamakan bisa Whatsapp',
                'name' => 'Syarat Dan Ketentuan',
                'type' => 'text',
            ],
            [
                'lookup' => 'image-video',
                'value' => 'file.jpg',
                'name' => 'Gambar Video Tron',
                'type' => 'file',
            ],

        ];
        DB::table('settings')->insert($users);
    }
}
