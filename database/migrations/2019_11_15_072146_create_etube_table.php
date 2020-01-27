<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtubeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etube', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul');
            $table->string('link');
            $table->text('deskripsi');
            $table->string('author');
            $table->unsignedInteger('id_kategori');
            $table->timestamps();

            $table->foreign('id_kategori')->references('id_kategori')->on('kategoris')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etube');
    }
}
