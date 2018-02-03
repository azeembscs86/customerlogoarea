<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogoFontsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logo_fonts', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('logo_font_id');
            $table->integer('order_type_id')->unsigned();
            $table->string('title');
            $table->string('img_path');
            $table->string('type_of_logo');
            $table->enum('status',['0', '1'])->default('1');
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
        Schema::dropIfExists('logo_fonts');
    }
}
