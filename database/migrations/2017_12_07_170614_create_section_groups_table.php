<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_groups', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->unsignedInteger('section_type_id');
            $table->unsignedInteger('bridge_id');
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->unsignedSmallInteger('order');
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
        Schema::dropIfExists('section_groups');
    }
}
