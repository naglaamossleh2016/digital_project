<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    // Fillable attributes (properties that can be mass assigned)
    protected $fillable = ['name','icon','description'];

    // Hidden attributes (not included when model is serialized to JSON)
    protected $hidden = [];
}
