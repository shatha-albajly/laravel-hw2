<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            // $table->increments('id')->unsigned()->unique();
            $table->string("title");
            $table->string("city")->nullable();
            $table->string("image");
            $table->string("requirements");
            $table->tinyInteger('user-id');

            // $table->integer('user_id')->unique()->nullable();

            // $table->foreign('user-id')->references('id')->on('users');


            $table->string("company");
            $table->string("deadline")->nullable();
            $table->boolean("is_active");
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
        Schema::dropIfExists('jobs');
    }
};