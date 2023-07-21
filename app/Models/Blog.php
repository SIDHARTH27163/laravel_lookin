<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['category' , 'location' , 'g_status' , 'status' , 'user_id' , 'user_name' , 'title' ,'additional_description', 'description' , 'image' , 'date'];
}
