<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_payments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id')->unsigned();
            $table->integer('user_id')->unsigned();            
            $table->integer('package_id')->unsigned();
            $table->integer('coupon_id')->unsigned()->nullable();
            $table->integer('payment_addon_id')->unsigned()->nullable();
            $table->integer('total_amount');
            $table->enum('status',['0', '1'])->default('0');
            $table->enum('is_paid',['0', '1'])->default('0');
            $table->foreign('order_id')->references('order_id')->on('logo_orders')->onDelete('cascade');
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->foreign('order_type_id')->references('order_type_id')->on('order_types')->onDelete('cascade');
            $table->foreign('package_id')->references('package_id')->on('packages')->onDelete('cascade');
            $table->foreign('coupon_id')->references('coupon_id')->on('user_coupons')->onDelete('cascade');
            $table->foreign('payment_addon_id')->references('payment_addon_id')->on('package_payment_adon')->onDelete('cascade');
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
        Schema::dropIfExists('order_payments');
    }
}
