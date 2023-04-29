<?php

namespace App\Models;
use App\Models\Vvolume;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yyear extends Model
{
    use HasFactory;
    public function volumes(){
        return $this->hasMany(Vvolume::class, 'yyear_id','id');
    }
}
