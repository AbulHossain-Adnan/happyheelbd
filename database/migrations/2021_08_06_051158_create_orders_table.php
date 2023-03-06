<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('payment_type');
            $table->string('blnc_transection')->nullable();
            $table->integer('subtotal');
            $table->integer('discount')->nullable();
            $table->integer('paying_amount');
            $table->integer('shipping')->nullable();
            $table->integer('vat')->nullable();
            $table->integer('status')->default(0);
            $table->integer('status_code');
            $table->integer('return')->default(0);
            $table->date('date')->nullable();
            $table->string('month')->nullable();
            $table->string('year')->nullable();

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
        Schema::dropIfExists('orders');
    }
}
