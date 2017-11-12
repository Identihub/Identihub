<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBridgeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bridges', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('user_id');
            $table->integer('image_id')->nullable();
            $table->integer('icons_order')->default(0);
            $table->integer('images_order')->default(1);
            $table->integer('fonts_order')->default(2);
            $table->integer('colors_order')->default(3);
            $table->integer('nr_images')->default(0);
            $table->integer('nr_icons')->default(0);
            $table->integer('nr_fonts')->default(0);
            $table->integer('nr_colors')->default(0);
//            $table->softDeletes();
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
        Schema::dropIfExists('bridges');
    }
}
