<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery_tourist_place extends Model
{
    use HasFactory;
    protected $fillable = ['t_id' , 'image'];
}
