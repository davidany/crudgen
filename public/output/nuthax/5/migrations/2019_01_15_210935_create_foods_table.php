<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('foods', function (Blueprint $table) {
          $table->increments('id');$table->integer('name')->nullable();$table->integer('calories')->nullable();$table->decimal('total_fat',5,1)->nullable();$table->decimal('saturated_fat',5,1)->nullable();$table->decimal('polyunsaturated_fat',5,1)->nullable();$table->decimal('monounsaturated_fat',5,1)->nullable();$table->decimal('trans_fat',5,1)->nullable();$table->integer('sodium')->nullable();$table->integer('potassium')->nullable();$table->decimal('total_carbs',5,1)->nullable();$table->decimal('dietary_fiber',5,1)->nullable();$table->decimal('sugars',5,1)->nullable();$table->decimal('protein',5,1)->nullable();$table->integer('cholesterol')->nullable();$table->integer('vitamin_a')->nullable();$table->integer('vitamin_c')->nullable();$table->integer('calcium')->nullable();$table->integer('iron')->nullable();$table->dateTime('recorded_time')->nullable();$table->decimal('sugar_alcohols',5,1)->nullable();$table->unsignedInteger('user_id');
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foods');
    }
}
$table->timestamps();