<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSihMisPatientVitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sih_mis_patient_vitals', function (Blueprint $table) {
            $table->id();
            $table->char('mr_no', 20);
            $table->date('vital_date');
            $table->char('vital_type', 100);
            $table->char('vital_value', 100);
            $table->char('vital_unit', 100);
            $table->timestamps();

//            $table->foreign('mr_no')->references('mr_no')->on('sih_mis_patients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sih_mis_patient_vitals');
    }
}
