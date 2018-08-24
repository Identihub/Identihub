<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIconIdFieldToBridgesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bridges', function (Blueprint $table) {
            $table->unsignedInteger('icon_id')->after('name')->nullable();

            $table->foreign('icon_id')->references('id')->on('icons')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bridges', function (Blueprint $table) {
            $table->dropColumn('icon_id');
        });
    }
}
