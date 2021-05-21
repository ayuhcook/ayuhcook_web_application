<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image_1')->nullable();
            $table->string('image_2')->nullable();
            $table->string('image_3')->nullable();
            $table->text('description')->nullable();
            $table->integer('servings');
            $table->integer('preparation_time');
            $table->string('level');
            $table->string('category');
            $table->boolean('publicity')->default(true);
            $table->boolean('is_complete')->default(false);

            $table->bigInteger('likes')->default(0);
            $table->unsignedBigInteger('post_by');
            $table->timestamps();

            $table->foreign('post_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes');
    }
}
