<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
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
            $table->string('ticket_qr_code');
            $table->string('ticket_pdf');
            $table->integer('menu_added');
            $table->integer('payment_method');
            $table->string('payment_paid_status');
            $table->string('second_payment_status');
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
        Schema::dropIfExists('order');
    }
}
