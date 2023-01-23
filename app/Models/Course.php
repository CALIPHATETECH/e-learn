<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = [];
    
    public function resources()
    {
        return $this->hasMany(Resource::class);
    }

    public function programme()
    {
        return $this->belongsTo(Programme::class);
    }

    public function videos()
    {
        $videos = [];
        foreach($this->resources as $resource){
            if($resource->type->name == 'Video'){
                $videos[] = $resource;
            }
        }
        return $videos;
    }

    public function audios()
    {
        $audios = [];
        foreach($this->resources as $resource){
            if($resource->type->name == 'Audio'){
                $audios[] = $resource;
            }
        }
        return $audios;
    }

    public function pdfs()
    {
        $pdfs = [];
        foreach($this->resources as $resource){
            if($resource->type->name == 'PDF'){
                $pdfs[] = $resource;
            }
        }
        return $pdfs;
    }
}
