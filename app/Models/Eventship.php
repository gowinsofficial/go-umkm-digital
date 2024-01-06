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
        'title',
        'direct_wa',
        'destination_url',
    ];

}
