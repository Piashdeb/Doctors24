<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->bigIncrements('doctorID');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('contactNo')->nullable();
            $table->string('chamber')->nullable();
            $table->string('available_day')->nullable();
            $table->string('imageName')->nullable();
            $table->text('other_details')->nullable();
            $table->unsignedBigInteger('departmentID')->nullable()->index();
            $table->foreign('departmentID')->references('departmentID')->on('departments')->onDelete('No Action')->onUpdate('No Action');
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
        Schema::dropIfExists('doctors');
    }
}
