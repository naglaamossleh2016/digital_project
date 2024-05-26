<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    use HasFactory;
    // Fillable attributes (properties that can be mass assigned)
    protected $fillable = ['name','count','icon'];

    // Hidden attributes (not included when model is serialized to JSON)
    protected $hidden = [];
}
