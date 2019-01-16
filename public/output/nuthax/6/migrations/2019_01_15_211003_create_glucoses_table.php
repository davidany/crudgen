<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGlucoseTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('glucoses', function (Blueprint $table) {
          $table->increments('id');$table->decimal('level',5,1)->nullable();$table->string('glucosecol',255)->nullable();$table->string('units',255)->nullable();$table->unsignedInteger('user_id');
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('glucoses');
    }
}
