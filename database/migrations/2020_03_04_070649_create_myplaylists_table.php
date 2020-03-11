<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMyplaylistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('myplaylists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('pid');
            $table->unsignedBigInteger('vid');
            $table->unsignedBigInteger('uid');
            $table->timestamps();
            
            $table->foreign('vid')
            ->references('id')
            ->on('sample_data')
            ->onDelete('cascade');
            $table->foreign('pid')
            ->references('id')
            ->on('play')
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
        Schema::dropIfExists('myplaylists');
    }
}
