<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SliderImage extends Model
{
    use HasFactory;
    protected $table = 'slides_galery';
    protected $primaryKey = 'id_img';
    protected $hidden = ['created_at', 'updated_at'];
    protected $fillable = [
        'title',
        'img_name',
    ];

}
