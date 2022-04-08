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
        Schema::create('user-profiles', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('phone');
            $table->tinyInteger('user-id');
            // $table->foreign('user-id')->references('id')->on('users');


            $table->string('country');
            $table->string('state');




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
        Schema::dropIfExists('user-profiles');
    }
};