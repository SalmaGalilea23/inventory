<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = ['quality','product','description','code','bill','date','number','date_out','person','place'];
}
