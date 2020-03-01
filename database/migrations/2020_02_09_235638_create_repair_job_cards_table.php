<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepairJobCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repair_job_cards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_name')->nullable();
            $table->string('invoice_no');
            $table->decimal('amount',10,2)->nullable();
            $table->date('date_of_repair')->nullable();
            $table->string('repairs_brief_description')->nullable();
            $table->integer('repair_code')->nullable();
            $table->string('job_cards');
            $table->date('job_date')->nullable();
            $table->integer('outside_repair_code')->nullable();
            $table->string('description')->nullable();
            $table->string('part_no')->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('unit_price')->nullable();
            $table->integer('cost')->nullable();
            $table->integer('outside_cost')->nullable();
            $table->string('technician_name')->nullable();
           $table->string('employee_number')->nullable();
           $table->date('personnel_job_date')->nullable();
           $table->string('time_in')->nullable();
           $table->string('time_out')->nullable();
           $table->integer('Hours')->nullable();
            $table->foreign('job_cards')->references('fleet-no')->on('job_cards')->onDelete('cascade');
            $table->foreign('job_cards')->references('fleet-no')->on('EquipmentMasterList')->onDelete('cascade');
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
        Schema::dropIfExists('repair_job_cards');
    }
}
