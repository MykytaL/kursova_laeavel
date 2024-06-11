<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'post'; // Вказуємо Laravel, що назва таблиці в базі даних - 'post'
    protected $fillable = ['user_name', 'email', 'comment'];
}

