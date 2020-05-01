<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTugas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('tugas')){
        Schema::create('tugas', function (Blueprint $table) {
            $table->string('id',30);
            $table->string('nama_tugas',115);

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
        Schema::table('tugas', function (Blueprint $table) {
            //
        });
    }
}
