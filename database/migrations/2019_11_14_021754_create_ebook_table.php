<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEbookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ebook', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul');
            $table->integer('isbn');
            $table->string('pengarang');
            $table->string('penerbit');
            $table->integer('jumlah_halaman');
            $table->integer('tahun_terbit');
            $table->text('deskripsi');
            $table->string('link');
            $table->string('cover');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ebook');
    }
}
