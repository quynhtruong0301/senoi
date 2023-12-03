<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('topic_id');
            $table->string('image');
            $table->longText('title');
            $table->string('author');
            $table->longText('description');
            $table->longText('content');
            $table->longText('slug')->nullable();
            $table->string('tag')->nullable();
            $table->tinyInteger('public')->default(1);
            $table->bigInteger('order')->default(0);
            $table->foreign('topic_id')->references('id')->on('topics')->onDelete('cascade');
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
        Schema::dropIfExists('blogs');
    }
}
