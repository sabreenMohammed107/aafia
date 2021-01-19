<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Relation1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         //  This is Realations for the users Table ..
         Schema::table('users', function (Blueprint $table) {
            $table->foreign('lab_id')->references('id')->on('labs');
           
        });

         //  This is Realations for the scans Table ..
         Schema::table('scans', function (Blueprint $table) {
            $table->foreign('lab_id')->references('id')->on('labs');
           
        });

         //  This is Realations for the analyses Table ..
         Schema::table('analyses', function (Blueprint $table) {
            $table->foreign('lab_id')->references('id')->on('labs');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
