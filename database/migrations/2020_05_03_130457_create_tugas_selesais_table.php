<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTugasSelesaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('tugas_selesais')){
        Schema::create('tugas_selesais', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_tugas')->unsigned();
            $table->timestamps();
            $table->foreign('id_tugas')->references('id')->on('tugas')->onDelete('cascade');
        });
    }
}
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tugas_selesais');
    }
}
