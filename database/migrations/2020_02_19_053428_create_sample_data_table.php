<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSampleDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sample_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('cat_id')->nullable;
            $table->unsignedBigInteger('uid')->nullable;
            $table->string('vname');
            $table->string('vdes');
            $table->string('image');
            $table->string('video');
            $table->timestamps();
            $table->foreign('cat_id')
            ->references('id')
            ->on('categories')
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
        Schema::dropIfExists('sample_data');
    }
}
