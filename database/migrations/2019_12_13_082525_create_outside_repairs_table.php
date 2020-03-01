<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOutsideRepairsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outside_repairs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_name');
            $table->string('invoice_no');
            $table->decimal('amount',10,2);
            $table->date('date_of_repair');
            $table->string('repairs_brief_description');
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
        Schema::dropIfExists('outside_repairs');
    }
}
