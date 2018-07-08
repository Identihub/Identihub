<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFormatFieldToImagesConverted extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('images_converted', function (Blueprint $table) {
            $table->enum('format', ['png', 'jpg'])->after('height')->default('png');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('images_converted', function (Blueprint $table) {
            $table->dropColumn('format');
        });
    }
}
