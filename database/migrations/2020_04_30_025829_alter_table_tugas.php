<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableTugas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('tugas','tanggal_tugas')){
        Schema::table('tugas', function (Blueprint $table) {
            $table->date('tanggal_tugas')->after('nama_tugas')->nullable();
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
        if (!Schema::hasColumn('tugas','tanggal_tugas')){
        Schema::table('tugas', function (Blueprint $table) {
            $table->date('tanggal_tugas')->after('nama_tugas')->nullable();
            
        });
        }
    }
}