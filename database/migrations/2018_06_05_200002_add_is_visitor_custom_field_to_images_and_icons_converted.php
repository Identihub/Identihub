<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIsVisitorCustomFieldToImagesAndIconsConverted extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('icons_converted', function (Blueprint $table) {
            $table->boolean('is_visitor_custom')->after('height')->default(0);
        });

        Schema::table('images_converted', function (Blueprint $table) {
            $table->boolean('is_visitor_custom')->after('height')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('icons_converted', function (Blueprint $table) {
            $table->dropColumn('is_visitor_custom');
        });

        Schema::table('images_converted', function (Blueprint $table) {
            $table->dropColumn('is_visitor_custom');
        });
    }
}
