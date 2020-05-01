<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableTugasss extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('tugas','verifikasi')){
        Schema::table('tugas', function (Blueprint $table) {
        $table->boolean('verifikasi')->after('status');
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
        if (!Schema::hasColumn('tugas','verifikasi')){
        Schema::table('tugas', function (Blueprint $table) {
        $table->boolean('verifikasi')->after('status');
            });
        }
    }
}