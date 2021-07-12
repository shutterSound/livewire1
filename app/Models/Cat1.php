<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cat1 extends Model
{
    use HasFactory;

    protected  $fillable=[
        'cat1name',
        'cat1code',
    ];
}
