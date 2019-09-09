<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';
    protected $pk = 'user_id';
    public $timestamps = false;
    protected $guarded = [];
}
