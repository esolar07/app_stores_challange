<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stores extends Model
{
    public $table = "app_stores";
    public $timestamps = false;

    protected $fillable = [
        'name',
        'address',
        'city',
        'state',
        'zip',
        'phone'
    ];

    
}
