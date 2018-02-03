<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserUsedCoupnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_used_coupons', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('user_used_coupons_sid');
            $table->integer('coupon_id')->unsigned();
            $table->integer('order_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->foreign('coupon_id')->references('coupon_id')->on('user_coupons')->onDelete('cascade');
            $table->foreign('order_id')->references('order_id')->on('logo_orders')->onDelete('cascade');
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('user_used_coupons');
    }
}
