<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->bigIncrements('appointmentID');
            $table->string('name')->nullable();
            $table->string('gender',15)->nullable();
            $table->string('age',100)->nullable();
            $table->string('email')->nullable();
            $table->string('contactNo',15)->nullable();
            $table->text('message')->nullable();
            $table->string('address')->nullable();
            $table->string('status',15)->default('Pending');
            $table->integer('serialNo')->nullable();
            $table->dateTime('appointmentTime')->nullable();
            $table->dateTime('prefer_date')->nullable();
            $table->unsignedBigInteger('doctorID')->nullable()->index();
            $table->foreign('doctorID')->references('doctorID')->on('doctors')->onDelete('No Action')->onUpdate('No Action');
            $table->unsignedBigInteger('patientID')->nullable()->index();
            $table->foreign('patientID')->references('id')->on('users')->onDelete('No Action')->onUpdate('No Action');
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
        Schema::dropIfExists('appointments');
    }
}
