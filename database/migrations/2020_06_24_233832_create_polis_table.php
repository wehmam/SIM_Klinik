<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePolisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('polis', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_pasien')->unsigned();
            $table->bigInteger('id_tindakan')->unsigned();
            $table->timestamps();

            $table->foreign('id_pasien')->references('id')->on('pasiens')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_tindakan')->references('id')->on('tindakans')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('polis');
    }
}
