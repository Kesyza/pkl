<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_sewa')->unsigned();
            $table->bigInteger('id_mobil')->unsigned();
            $table->bigInteger('id_sopir')->unsigned();
            $table->string('tanggal_kembali');
            $table->string('jumlah_bayar');
            $table->string('denda');

            $table->foreign('id_sewa')->references('id')
                ->on('sewas')->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('id_mobil')->references('id')
                ->on('mobils')->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('id_sopir')->references('id')
                ->on('sopirs')->onUpdate('cascade')
                ->onDelete('cascade');

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
        Schema::dropIfExists('transaksis');
    }
}
