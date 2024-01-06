<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pariwisata extends Model
{
    use HasFactory;
    protected $table = 'pariwisata';
    protected $primaryKey = 'id_pariwisata';
    protected $hidden = ['created_at', 'updated_at'];
    protected $fillable = [
        'id_menu',
        'id_img',
        'nama',
        'lokasi',
        'maps',
        'rating',
        'detail',
        'whatsapp_to',
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
