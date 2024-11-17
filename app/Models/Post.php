<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // データベースに挿入可能なカラムを指定
    protected $fillable = [
        'title',
        'content',
    ];
}
