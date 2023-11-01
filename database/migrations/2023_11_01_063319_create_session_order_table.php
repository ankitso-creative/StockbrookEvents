<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('session_order', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('order_id');
            $table->integer('tickets');
            $table->string('deposit_amount');
            $table->string('discount');
            $table->string('pending_amount');
            $table->string('total_amount');
            $table->integer('table_booking_date');
            $table->text('table_details');
            $table->text('request');
            $table->string('transaction_id');
            $table->string('payment_status');
            $table->integer('payment_method');
            $table->string('payment_paid_status');
            $table->string('payment_type');
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
        Schema::dropIfExists('session_order');
    }
}
