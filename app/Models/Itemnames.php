<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itemnames extends Model
{
    use HasFactory;
    protected $fillable = [
        'itemname'
    ];
}
