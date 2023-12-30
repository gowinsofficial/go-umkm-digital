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
        $img_group = [
            [
                'group' => 'kuliner-madura',
            ],
            [
                'group' => 'kuliner-madura',
            ],
        ];
        $img_detail = [
            [
                'id_img' => 1,
                'directory' => 'images/',
                'filename' => 'bebek-sinjai.jpg',
            ],
            [
                'id_img' => 2,
                'directory' => 'images/',
                'filename' => 'bebek-sinjai-front.jpg',
            ]
        ];

        DB::table('images')->insert($img_group);
        DB::table('image_detail')->insert($img_detail);
    }
}
