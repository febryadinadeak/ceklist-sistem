<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableVerifikasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('verifikasi')){
        Schema::create('verifikasi', function (Blueprint $table) {
            $table->string('id',30);
            $table->string('tanggal_betugas',115);

            $table->primary('id');
            $table->engine = 'InnoDB';
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
        Schema::table('verifikasi', function (Blueprint $table) {
            
        });
    }
}
