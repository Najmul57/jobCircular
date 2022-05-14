<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'description',
        'thumbnail',
        'category_id',
        'meta_title',
        'meta_description',
        'meta_keyword',
        'user_id'
    ];

    public function category()
    {
        return $this->hasOne(Category::class,'id','category_id');
    }
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
