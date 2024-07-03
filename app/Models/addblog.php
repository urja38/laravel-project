<?php

namespace App\Models;
use App\Models\addblog;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addblog extends Model
{
    protected $table= 'addblog';
    protected $fillable = [
        'title',
        'image',
        'description',
    ];
}
