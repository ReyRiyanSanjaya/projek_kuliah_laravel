<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class page extends Model
{
    use HasFactory;
    /**
     * 
     * fileable
     * 
     * @var array
     */
    protected $filleable = [
        'name',
        'slug',
        'content',
        'user_id'
    ];
}
