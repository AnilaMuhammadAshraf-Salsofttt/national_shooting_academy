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
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('customer_email');
            $table->string('customer_phone');
            $table->string('customer_fist_name');
            $table->string('customer_last_name');

            $table->string('billing_email');
            $table->string('billing_phone');
            $table->string('billing_fist_name');
            $table->string('billing_last_name');
            $table->string('billing_address1');
            $table->string('billing_address2');
            $table->string('billing_city');
            $table->string('billing_state');
            $table->string('billing_zip');
            $table->string('billing_country');


            $table->string('shipping_email');
            $table->string('shipping_phone');
            $table->string('shipping_fist_name');
            $table->string('shipping_last_name');
            $table->string('shipping_address1');
            $table->string('shipping_address2');
            $table->string('shipping_city');
            $table->string('shipping_state');
            $table->string('shipping_zip');
            $table->string('shipping_country');

            $table->string('sub_total');
            $table->string('status');
            $table->string('guest_checkout');


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
