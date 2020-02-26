<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $fillable = ['id','name','description','position'];
    public $timestamps = false;
    protected $table = 'places';
}
