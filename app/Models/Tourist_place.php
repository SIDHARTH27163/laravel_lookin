<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tourist_place extends Model
{
    use HasFactory;
    protected $fillable = ['category' , 'location' , 'g_status' , 'status'   , 'heading' , 'description', 'description2' , 'file' , 'district', 'best_time'];
}
