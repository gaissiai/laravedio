<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vedio extends Model
{
    //
    protected $fillable = ['title','path','lecturer','published_at','looked_num'];
}
