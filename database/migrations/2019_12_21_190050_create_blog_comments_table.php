<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_comments', function (Blueprint $table) {
            $table->bigIncrements('blogcmtID');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->text('comment');
            $table->unsignedBigInteger('blogID')->index();
            $table->foreign('blogID')->references('blogID')->on('blogs')->onDelete('cascade')->onUpdate('No Action');
            $table->unsignedBigInteger('userID')->index();
            $table->foreign('userID')->references('id')->on('users')->onDelete('cascade')->onUpdate('No Action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_comments');
    }
}
