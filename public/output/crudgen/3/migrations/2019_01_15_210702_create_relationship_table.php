<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelationshipTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('relationship', function (Blueprint $table) {
          $table->increments('id');$table->string('first_table',255)->nullable();$table->string('relationship_type',255)->nullable();$table->string('related_table',255)->nullable();$table->unsignedInteger('project_id');
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relationship');
    }
}
