<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    public $timestamps = true;
    // Fillable attributes (properties that can be mass assigned)
    protected $fillable = [
        
    ];

    // Hidden attributes (not included when model is serialized to JSON)
    protected $hidden = [];
    
}
