<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bazar extends Model
{
    use HasFactory;
    protected $table = 'bazar';
    protected $primaryKey = 'id_bazar';
    protected $fillable = [
        'id_img',
        'title',
        'tgl_acara',
        'destination_url',
        'whatsapp_member',
    ];

    public function image()
    {
        return $this->belongsTo(Images::class, 'id_img', 'id_img');
    }

}
