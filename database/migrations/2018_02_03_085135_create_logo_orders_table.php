<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogoOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logo_orders', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('order_id');
            $table->integer('order_type_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('logo_name');
            $table->string('logo_slogan');
            $table->string('logo_cat');
            $table->string('logo_web_url');
            $table->string('logo_target_audience');
            $table->text('logo_descrip');
            $table->string('logo_competitor_url')->nullable();
            $table->string('logo_sample')->nullable();
            $table->text('logo_visual_descp')->nullable();            	
            $table->text('logo_visual_images')->nullable();
            $table->string('logo_type');
            $table->string('logo_color');
            $table->string('logo_other_color');
            $table->string('logo_usage');
            $table->string('logo_other_usage')->nullable();
            $table->string('logo_fonts');
            $table->string('logo_other_fonts')->nullable();
            $table->string('logo_feel');
            $table->text('communication_team')->nullable();
            $table->text('helpful_images')->nullable();            
            $table->foreign('order_type_id')->references('order_type_id')->on('order_types')->onDelete('cascade');
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
        Schema::dropIfExists('logo_orders');
    }
}
