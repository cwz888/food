<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    protected $table = 'seller';
    protected $pk = 'seller_id';
    public $timestamps = false;
    protected $guarded = [];
}
