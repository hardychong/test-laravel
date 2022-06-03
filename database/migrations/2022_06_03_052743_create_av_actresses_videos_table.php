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
        Schema::create('av_actresses_videos', function (Blueprint $table) {
            $table->unsignedBigInteger('actresses_id');
            $table->unsignedBigInteger('video_id');
			$table->foreign('actresses_id')->references('id')->on('av_actresses');
			$table->foreign('video_id')->references('id')->on('av_videos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('av_actresses_videos');
    }
};
