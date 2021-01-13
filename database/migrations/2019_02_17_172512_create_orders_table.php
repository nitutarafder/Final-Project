<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            // $table->integer('product_id');
            $table->integer('user_id');
            $table->integer('total');
            $table->string('status')->default('pending');
            // $table->integer('order_quantity');
            // $table->float('total_price');
            // $table->integer('payment_method_id');
            // $table->string('product_size');
            // $table->string('delivery_address');
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
