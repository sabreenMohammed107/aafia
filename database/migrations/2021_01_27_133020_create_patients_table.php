<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->integer('marital_status_id')->nullable();
            $table->bigInteger('city_id')->unsigned()->nullable();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->string('address')->nullable();
            $table->dateTime('birth_date',6)->nullable();
            $table->tinyInteger('gender')->default(0);
            $table->string('blood_type')->nullable();
            $table->integer('tall')->nullable();
            $table->integer('width')->nullable();
            $table->tinyInteger('smoker')->default(0);
            $table->text('chronic_diseases')->nullable();
            $table->text('previous_surgeries')->nullable();
            $table->text('current_medications')->nullable();
            $table->text('vaccinations')->nullable();
            $table->text('sensitivity')->nullable();
            $table->text('family_diseases')->nullable();
            $table->text('notes')->nullable();
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
        Schema::dropIfExists('patients');
    }
}
