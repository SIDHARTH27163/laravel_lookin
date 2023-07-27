<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services_cat extends Model
{
    use HasFactory;
    protected $fillable = ['service_id','service_category'];
}
