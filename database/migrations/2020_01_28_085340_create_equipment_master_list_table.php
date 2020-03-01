<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipmentMasterListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('EquipmentMasterList', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fleet_no');
            $table->string('parent_fleet_no');
            $table->string('fleet-no_description');
            $table->string('Registration_no');
            $table->string('hourmeter_reading');
            $table->string('attachment');
            $table->string('type_code');
            $table->string('type_description');
            $table->string('make');
            $table->string('model');
            $table->string('machine_serial_no');
            $table->string('machine_arr_n');
            $table->string('engine_make');
            $table->string('engine_model');
            $table->string('engine_serial_no');
            $table->string('engine_arr_n');
            $table->string('power_rating_hp_kw');
            $table->string('capacity');
            $table->string('assesment');
            $table->string('condition');
            $table->string('region');
            $table->string('project_code');
            $table->string('project_description');
            $table->string('users');
            $table->string('ownership');
            $table->string('year_purchase');
            $table->string('mfg_year');
            $table->date('comm_date');
            $table->integer('invoice');
            $table->string('order_no');
            $table->date('date_in');
            $table->string('purchase_condition');
            $table->integer('landed_cost');
            $table->string('market_value');
            $table->string('location');
            $table->foreign('fleet_no')->references('fleet-no')->on('job_cards')->onDelete('cascade');
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
        Schema::dropIfExists('EquipmentMasterList');
    }
}
