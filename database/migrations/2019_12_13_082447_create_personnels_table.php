<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonnelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnels', function (Blueprint $table) {
           $table->bigIncrements('id');
           $table->string('technician_name');
           $table->string('employee_number')->nullable();
           $table->date('job_date');
           $table->string('time_in');
           $table->string('time_out');
           $table->integer('Hours');
           $table->integer('repair_code');
           $table->string('job_cards');
           $table->foreign('job_cards')->references('fleet-no')->on('job_cards')->onDelete('cascade');
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
        Schema::dropIfExists('personnels');
    }
}
