<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $table = 'email';
    protected $fillable = [ 'name', 'address', 'subject', 'message', 'status'];
}
