<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class about extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'name',
        'designation'
       
    ];
}

