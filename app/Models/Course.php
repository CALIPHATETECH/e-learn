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
}
