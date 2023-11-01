<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BookingPlaces extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_places', function(Blueprint $table){
            $table->id();      
            $table->integer('table_booking_date'); 
            $table->integer('table_of_ten'); 
            $table->integer('table_of_twelve'); 
            $table->integer('numbers_of_table'); 
            $table->integer('price'); 
            $table->integer('discount'); 
            $table->integer('category'); 
            $table->integer('status'); 
            $table->integer('sold'); 
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
        Schema::dropIfExists('booking_places');
    }
}
