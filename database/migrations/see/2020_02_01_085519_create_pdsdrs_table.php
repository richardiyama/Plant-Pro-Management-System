<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePdsdrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pdsdrs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fleet_no');
            $table->integer('idle')->nullable();
            $table->integer('available')->nullable();
            $table->integer('breakdown')->nullable();
            $table->string('availability_status');
            $table->integer('fuel_quantity')->nullable();
            $table->string('fuel_type')->nullable();
            $table->integer('e_o')->nullable();
            $table->integer('t_o')->nullable();
            $table->integer('h_o')->nullable();
            $table->integer('other_oil')->nullable();
            $table->string('filters_issued')->nullable();
            $table->string('hour_meter_reading')->nullable();
            $table->string('unit');
            $table->string('remarks')->nullable();
            $table->date('date_entry')->nullable();
            $table->date('location')->nullable();
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
        Schema::dropIfExists('pdsdrs');
    }
}
