<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etube extends Model
{
    protected $table = 'etube';
    protected $fillable = ['judul','link','deskripsi','author','id_kategori']; 
}
