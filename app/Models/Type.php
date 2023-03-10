<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $guarded = [];
    
    public function resources(Type $var = null)
    {
        return $this->hasMany(Resource::class);
    }
}
