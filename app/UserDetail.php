<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model{
    protected $fillable = ['name', 'email_address', 'birth_date'];
}