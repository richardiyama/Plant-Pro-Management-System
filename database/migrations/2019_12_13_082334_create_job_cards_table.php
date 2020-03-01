<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_cards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sending_area');
            $table->date('date_in');
            $table->date('date_out');
            $table->string('fleet-no');
            $table->integer('plant_cost_center');
            $table->string('make');
            $table->string('model');
            $table->string('hr/km_reading');
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
        Schema::dropIfExists('job_cards');
    }
}
