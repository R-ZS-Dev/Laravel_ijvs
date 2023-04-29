<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReceivedArticles extends Model
{
    use HasFactory;
    protected $fillable=[
        'article_title', 'author_name','co_author_email','dept','abstract','keywords','user_login_id',
        'ms_file','potential_reviewer','performa', 'created_at', 'updated_at'
    ];
}
