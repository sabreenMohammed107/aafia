<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Relation extends Migration
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

          //  This is Realations for the patients Table ..
          Schema::table('patients', function (Blueprint $table) {
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('user_id')->references('id')->on('users');
           
        });

         //  This is Realations for the orders Table ..
         Schema::table('orders', function (Blueprint $table) {
            $table->foreign('order_status_id')->references('id')->on('order_statuses');
            $table->foreign('analysis_lab_id')->references('id')->on('labs');
            $table->foreign('scan_lab_id')->references('id')->on('labs');
            $table->foreign('patient_id')->references('id')->on('patients');
        });


         //  This is Realations for the order_items Table ..
         Schema::table('order_items', function (Blueprint $table) {
            $table->foreign('scan_id')->references('id')->on('scans');
            $table->foreign('analysis_id')->references('id')->on('analyses');
            $table->foreign('order_id')->references('id')->on('orders');
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
