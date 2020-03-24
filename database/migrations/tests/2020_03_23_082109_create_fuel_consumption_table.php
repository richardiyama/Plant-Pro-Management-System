<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuelConsumptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fuel_consumption', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fleet_no');
            $table->string('model');
            $table->string('hour_meter_reading_first');
            $table->string('hour_meter_reading_second');
            $table->decimal('average_consumption',10,2);
            $table->decimal('theorectical',10,2);
            $table->string('location');
            $table->integer('total_fuel_quantity');
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
        Schema::dropIfExists('fuel_consumption');
    }
}
