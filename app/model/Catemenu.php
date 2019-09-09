<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Catemenu extends Model
{
    
    protected $table = 'catemenu';
    protected $pk = 'cart_id';
    public $timestamps = false;
    protected $guarded = [];

}
