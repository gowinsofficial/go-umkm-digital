<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'services';
    protected $primaryKey = 'id_user';
    protected $hidden = ['created_at', 'updated_at'];
    protected $fillable = [
        'name',
        'username',
        'password',
    ];

}
