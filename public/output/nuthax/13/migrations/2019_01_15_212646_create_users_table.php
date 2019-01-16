<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
          $table->increments('id');$table->string('name',255);$table->string('email',255);$table->timestamp('email_verified_at')->nullable();$table->string('password',255);$table->string('remember_token',100)->nullable();$table->timestamp('created_at')->nullable();$table->timestamp('updated_at')->nullable();$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
