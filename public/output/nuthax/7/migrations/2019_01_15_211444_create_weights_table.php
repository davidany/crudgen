<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeightTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('weights', function (Blueprint $table) {
          $table->increments('id');$table->decimal('weight',5,1)->nullable();$table->string('units',255)->nullable();$table->unsignedInteger('user_id');$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weights');
    }
}
