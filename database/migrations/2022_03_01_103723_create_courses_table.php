<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
         $table->id();
         $table->string('name_course');
         $table->string('name_place');
         $table->string('name_lecturer');
         $table->string('name_responsible');
         $table->date('date');
         $table->time('start_time');
         $table->time('end_time');
         $table->string('expenses'); //free or amount 
         $table->string('payment')->nullable();
         $table->unsignedSmallInteger('number')->nullable();
         $table->string('details')->nullable();
         $table->string('note')->nullable();
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
        Schema::dropIfExists('courses');
    }
};
