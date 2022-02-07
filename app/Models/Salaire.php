<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Salaire extends Model
{
    use HasFactory;

    protected $table = "bulletins_salaire"; 
    protected $guarded = ['*'];

}