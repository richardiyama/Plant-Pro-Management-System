<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartWorkedOnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('part_worked_ons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('job_date');
            $table->integer('repair_code');
            $table->string('description');
            $table->string('part_no');
            $table->integer('quantity');
            $table->integer('unit_price');
            $table->string('job_cards');
            $table->integer('cost')->nullable();
            $table->integer('outside_cost')->nullable();
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
        Schema::dropIfExists('part_worked_ons');
    }
}
