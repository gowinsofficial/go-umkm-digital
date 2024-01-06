<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ojol extends Model
{
    use HasFactory;
    protected $table = 'ojol_madura';
    protected $primaryKey = 'id_ojol';
    protected $hidden = ['created_at', 'updated_at'];
    protected $fillable = [
        'id_menu',
        'id_img',
        'nama',
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
