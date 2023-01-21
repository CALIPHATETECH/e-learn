<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    protected $guarded = [];
    
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
