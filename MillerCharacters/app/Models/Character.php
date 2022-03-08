<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Support\Facades\Cache;

class Character extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'birthday', 'occupation', 'img', 'status' ];


}
