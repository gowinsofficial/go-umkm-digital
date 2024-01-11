<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostArticles extends Model
{
    use HasFactory;
    protected $table = 'post_articles';
    protected $primaryKey = 'id_article';
    protected $fillable = [
        'id_img',
        'header',
        'tgl_post',
        'writer',
        'content',
        'file_upload',
    ];

    public function image()
    {
        return $this->belongsTo(Images::class, 'id_img', 'id_img');
    }

}
