<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->bigIncrements('lid');
            $table->unsignedBigInteger('id')->nullable();
            $table->unsignedBigInteger('uid')->unique();
            $table->timestamps();
            
            $table->foreign('id')
            ->references('id')
            ->on('sample_data')
            ->onDelete('cascade');
            $table->foreign('uid')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('likes');
    }
}
