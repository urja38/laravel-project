<?php

namespace App\Models;
use App\Models\contact;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    protected $table= 'contact';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',
    ];
}
