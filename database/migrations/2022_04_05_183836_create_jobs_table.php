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
            $table->string("title");
            $table->string("city")->nullable();
            $table->string("image");
            $table->string("requirements");
            $table->string("user-id");

            // $table->foreignId('user_id');
            // $table->foreignIdFor(users::class);
            $table->foreign('user-id')->references('users')->on('id');


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