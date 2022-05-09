<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'thambnail',
        'category_id',
        'meta_title',
        'meta_description',
        'meta_keyword',
    ];

    public function category()
    {
        return $this->hasOne(Category::class,'category_id','id');
    }
}
