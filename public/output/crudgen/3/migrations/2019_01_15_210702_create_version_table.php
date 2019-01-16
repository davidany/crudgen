<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVersionTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('version', function (Blueprint $table) {
          $table->increments('id');$table->string('version_number',255)->nullable();$table->string('version_folder_name',255)->nullable();$table->unsignedInteger('project_id');
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('version');
    }
}
