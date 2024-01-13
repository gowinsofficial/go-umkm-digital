<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventship extends Model
{
    use HasFactory;
    protected $table = 'eventship';
    protected $primaryKey = 'id_event';
    protected $fillable = [
        'id_img',
        'title',
        'whatsapp_member',
        'direct_wa',
        'destination_url',
    ];

    public function image()
    {
        return $this->belongsTo(Images::class, 'id_img', 'id_img');
    }

}
