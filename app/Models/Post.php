<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    /**
     * 
     * fileable
     * 
     * @var array
     */
    protected $filleable = [
        'title',
        'slug',
        'category_id',
        'user_id',
        'content',
        'image'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
