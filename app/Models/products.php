<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $fillable = [
        'productname',
        'productimg',
        'productdesc1',
        'productdesc2',
        'productWarranty',
        'productPrice',
    ];
}
