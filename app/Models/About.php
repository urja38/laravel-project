<?php

namespace App\Models;
use app\Models\About;               

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = ['image', 'about_our_company'];
}
