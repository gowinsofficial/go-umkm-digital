<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;
    protected $table = 'images';
    protected $primaryKey = 'id_img';
    protected $hidden = ['created_at', 'updated_at'];
    protected $fillable = [
        'group',
    ];

    protected $with = ["imgdetail"];

    public function imgdetail()
    {
        return $this->hasMany(ImageDetail::class, 'id_img', 'id_img');
    }
}
