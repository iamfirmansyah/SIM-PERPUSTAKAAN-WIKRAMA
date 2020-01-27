<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ebook extends Model
{
    protected $table = 'ebook';
    protected $fillable = [ 'judul', 'isbn', 'pengarang', 'penerbit', 'jumlah_halaman', 'deskripsi','cover', 'tahun_terbit','link'];
}
