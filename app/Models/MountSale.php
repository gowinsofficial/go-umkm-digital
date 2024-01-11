<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MountSale extends Model
{
    use HasFactory;
    protected $table = 'mountly_sale';
    protected $primaryKey = 'id_sale';
    protected $fillable = [
        'id_img',
        'kategori',
        'nama_produk',
        'harga_awal',
        'diskon',
        'detail',
    ];

    public function image()
    {
        return $this->belongsTo(Images::class, 'id_img', 'id_img');
    }

}
