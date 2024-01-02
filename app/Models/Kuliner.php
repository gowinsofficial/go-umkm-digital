<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kuliner extends Model
{
    use HasFactory;
    protected $table = 'kuliner_madura';
    protected $primaryKey = 'id_kuliner';
    protected $hidden = ['created_at', 'updated_at'];
    protected $fillable = [
        'id_menu',
        'id_img',
        'kategori',
        'nama',
        'outline',
        'resto',
        'link_resto',
        'harga',
        'rating',
        'detail',
    ];
    public function menu()
    {
        return $this->belongsTo(Menu::class, 'id_menu', 'id_menu');
    }
    public function image()
    {
        return $this->belongsTo(Images::class, 'id_img', 'id_img');
    }


}
