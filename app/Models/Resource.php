<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Resource extends Model
{
    protected $guarded = [];
    
    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function display()
    {
        return Storage::url($this->link);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
