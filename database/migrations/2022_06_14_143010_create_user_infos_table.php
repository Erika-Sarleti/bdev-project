<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_infos', function (Blueprint $table) {
            //$table->id();
            $table->unsignedBigInteger('user_id')->unique();
            $table->string('cv');
            $table->string('image')->nullable();
            $table->string('locality');
            $table->string('github')->nullable();
            $table->text('description')->nullable();
            $table->string('role');
            $table->timestamps();
            $table->string('phone');

            $table->foreign('user_id')
                    ->references('id')
                    ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_infos');
    }
}
