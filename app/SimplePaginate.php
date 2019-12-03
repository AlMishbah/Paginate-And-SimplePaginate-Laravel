<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SimplePaginate extends Model
{
    protected $fillable = ['name'];
    protected $table = 'simplepaginates';
}
