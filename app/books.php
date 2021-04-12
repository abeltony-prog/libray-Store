<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    //
    protected $table = "books";
    protected $fillable = [
        'name','code','number'
    ];
}
