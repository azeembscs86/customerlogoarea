<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagePaymentAdonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_payment_adon', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('package_payment_adon_id');
            $table->integer('order_type_id')->unsigned();
            $table->string('title');
            $table->string('img_path');
            $table->string('price');
            $table->text('descp');
            $table->enum('status',['0', '1'])->default('1');
            $table->foreign('order_type_id')->references('order_type_id')->on('order_types')->onDelete('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('package_payment_adon');
    }
}
