<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckLevelTable extends Migration
{
	/**
	 * Run the migrations.
	 * @return void
	 */
	public function up()
	{
		Schema::create('check_levels', function (Blueprint $table) {
			$table->increments('id');
			$table->tinyint('tinytiny');
			$table->decimal('decdec', 5, 2);
			$table->timestamp('timetime')->default(CURRENT_TIMESTAMP);
			$table->dateTime('datedatetime');
			$table->text('texttext');
			$table->tinyint('boolbool');
			$table->enum('enumenum', ['d''e''f']);$table->string('stringstring', 255)->default(bob);$table->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('check_levels');
	}
}
