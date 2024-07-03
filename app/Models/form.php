<?php

namespace App\Models;
use app\Models\form;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class form extends Model
{
    use HasFactory;
    protected $table= 'form';

    protected $fillable = ['first_name', 'last_name','email','contact_number'];

}
