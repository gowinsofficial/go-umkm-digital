<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Menus extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'group' => 'kuliner-madura',
                'nama_menu' => 'Bangkalan',
            ],
            [
                'group' => 'kuliner-madura',
                'nama_menu' => 'Sampang',
            ],
            [
                'group' => 'kuliner-madura',
                'nama_menu' => 'Pamekasan',
            ],
            [
                'group' => 'kuliner-madura',
                'nama_menu' => 'Sumenep',
            ],
            [
                'group' => 'batik-madura',
                'nama_menu' => 'Bangkalan',
            ],
            [
                'group' => 'batik-madura',
                'nama_menu' => 'Sampang',
            ],
            [
                'group' => 'batik-madura',
                'nama_menu' => 'Pamekasan',
            ],
            [
                'group' => 'batik-madura',
                'nama_menu' => 'Sumenep',
            ],
            [
                'group' => 'madura-tv',
                'nama_menu' => 'Bangkalan',
            ],
            [
                'group' => 'madura-tv',
                'nama_menu' => 'Sampang',
            ],
            [
                'group' => 'madura-tv',
                'nama_menu' => 'Pamekasan',
            ],
            [
                'group' => 'madura-tv',
                'nama_menu' => 'Sumenep',
            ],
            [
                'group' => 'pariwisata',
                'nama_menu' => 'Bangkalan',
            ],
            [
                'group' => 'pariwisata',
                'nama_menu' => 'Sampang',
            ],
            [
                'group' => 'pariwisata',
                'nama_menu' => 'Pamekasan',
            ],
            [
                'group' => 'pariwisata',
                'nama_menu' => 'Sumenep',
            ],
            [
                'group' => 'branding-umkm',
                'nama_menu' => 'Shopee',
            ],
            [
                'group' => 'branding-umkm',
                'nama_menu' => 'Tiktok',
            ],
            [
                'group' => 'branding-umkm',
                'nama_menu' => 'Instagram',
            ],
            [
                'group' => 'branding-umkm',
                'nama_menu' => 'Youtube',
            ],
            [
                'group' => 'ojol-madura',
                'nama_menu' => 'Bangkalan',
            ],
            [
                'group' => 'ojol-madura',
                'nama_menu' => 'Sampang',
            ],
            [
                'group' => 'ojol-madura',
                'nama_menu' => 'Pamekasan',
            ],
            [
                'group' => 'ojol-madura',
                'nama_menu' => 'Sumenep',
            ],
            [
                'group' => 'eventship',
            ],
            [
                'group' => 'bazar',
            ],

        ];
        DB::table('menus')->insert($users);
    }
}
