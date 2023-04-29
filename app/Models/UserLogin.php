<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLogin extends Model
{
    use HasFactory;
    protected $fillable=[
        'first_name','last_name','ph_num','email','password','user_address','city_name','country_name','created_at','updated_at'
    ];
}
