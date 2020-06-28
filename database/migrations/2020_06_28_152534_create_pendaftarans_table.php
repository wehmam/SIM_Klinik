<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->bigIncrements('no_pendaftaran');
            $table->bigInteger('id_pasien')->unsigned();
            $table->bigInteger('id_dokter')->unsigned();
            $table->bigInteger('id_poli')->unsigned();
            $table->timestamps();

            $table->foreign('id_pasien')->references('id')->on('pasiens')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_dokter')->references('id')->on('dokters')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_poli')->references('id')->on('polis')->onUpdate('cascade')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftarans');
    }
}
