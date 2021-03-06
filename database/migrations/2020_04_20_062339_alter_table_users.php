<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
        if (!Schema::hasColumn('users','role')){
        Schema::table('users', function (Blueprint $table) {
           $table->integer('role')->after('id')->nullable();
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
        if (!Schema::hasColumn('users','role')){
            Schema::table('users', function (Blueprint $table) {
           $table->integer('role')->after('id');
            });
        }
    }
}
