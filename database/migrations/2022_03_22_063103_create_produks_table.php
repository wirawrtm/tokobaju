<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('iduser')->nullable();
            $table->string('nama');
            $table->string('foto');
            $table->String('ukurans');
            $table->String('ukuranm');
            $table->String('ukuranl');
            $table->String('ukuranxl');
            $table->String('detail1');
            $table->String('detail2');
            $table->String('detail3');
            $table->String('detail4');
            $table->String('detail5');
            $table->integer('harga');
            $table->integer('jumlah');
            $table->integer('terjual')->nullable();
            $table->text('keterangan');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produks');
    }
}
