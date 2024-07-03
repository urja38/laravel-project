<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\a-crud;

class a-crud extends Model
{
    use HasFactory;

    protected $table="aboutcrud";

    protected $fillable=[
        'about_our_company',
    ];
}
