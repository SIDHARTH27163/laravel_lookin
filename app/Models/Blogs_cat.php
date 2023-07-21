<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs_cat extends Model
{
    use HasFactory;
    protected $fillable = ['category'];
}
