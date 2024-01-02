<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageDetail extends Model
{
    use HasFactory;
    protected $table = 'image_detail';
    protected $primaryKey = 'id_imgdetail';
    protected $hidden = ['created_at', 'updated_at'];
    protected $fillable = [
        'id_img',
        'directory',
        'filename',
    ];
    public function image()
    {
        return $this->belongsTo(Images::class, 'id_img', 'id_img');
    }
}
