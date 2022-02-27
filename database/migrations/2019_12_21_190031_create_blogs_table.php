<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('blogID');
            $table->string('title');
            $table->longText('description')->nullable();
            $table->string('imageName')->nullable();
            $table->unsignedBigInteger('blogcatID')->nullable()->index();
            $table->foreign('blogcatID')->references('blogcatID')->on('blog_cats')->onDelete('No Action')->onUpdate('No Action');
            $table->unsignedBigInteger('userID')->nullable()->index();
            $table->foreign('userID')->references('id')->on('users')->onDelete('No Action')->onUpdate('No Action');
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
