<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDbCredentialTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('db_credential', function (Blueprint $table) {
          $table->increments('id');$table->string('host',255)->nullable();$table->string('database',255)->nullable();$table->string('username',255)->nullable();$table->string('password',255)->nullable();$table->unsignedInteger('project_id');
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('db_credential');
    }
}
