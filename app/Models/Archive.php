<?php

namespace App\Models;
use App\Models\Yyear;
use App\Models\Vvolume;

use App\Models\ArchiveFigures;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Archive extends Model
{
    use HasFactory;
    public function volumes(){
        return $this->belongsTo(Vvolume::class, 'vvolume_id','id');
    }
    public function years(){
        return $this->belongsTo(Yyear::class, 'yyear_id','id');
    }
    public function archive_figure(){
        return $this->hasOne(ArchiveFigures::class, 'archive_article_id','id')->oldestOfMany();
    }
}
