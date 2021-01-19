<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scans', function (Blueprint $table) {
            $table->id();
            $table->string('en_name')->nullable();
            $table->string('ar_name')->nullable();
            $table->text('en_desc')->nullable();
            $table->text('ar_desc')->nullable();
            $table->float('original_cost', 10, 2)->default('0');
            $table->float('discount_pct', 8, 2)->default('0');
            $table->bigInteger('lab_id')->unsigned()->nullable();
            $table->text('notes')->nullable();
            $table->tinyInteger('active')->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scans');
    }
}
