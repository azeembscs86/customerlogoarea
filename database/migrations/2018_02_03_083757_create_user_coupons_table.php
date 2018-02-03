<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_coupons', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('coupon_id');
            $table->integer('order_type_id')->unsigned();
            $table->string('coupon_code');
            $table->text('descp');
            $table->string('price');
            $table->enum('is_active',['0', '1'])->default('1');
            $table->foreign('order_type_id')->references('order_type_id')->on('order_types')->onDelete('cascade');
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
        Schema::dropIfExists('user_coupons');
    }
}
