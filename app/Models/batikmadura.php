<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class batikmadura extends Model
{
    use HasFactory;
    protected $table = 'batik_madura';
    protected $primaryKey = 'id_batik';
    //protected $fillable = ['id_menu', 'id_img', 'status_generate'];
    // public function getRealtimeData()
    // {
    //     $waktuModel = Carbon::now();
    //     // Lakukan sesuatu dengan $waktuModel, seperti menyimpannya dalam database, dll.
    // };
    // $now = Carbon::now()->format('Y-m-d');
    protected $fillable = [
    'id_batik',
    'id_menu',
    'id_img',
    'nama',
    'motif',
    'corak',
    'harga',
    'rating',
    'detail',
    'whatsapp_umkm',
    'created_at',
    'updated_at',
    ];
    
    
}
