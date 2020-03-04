<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSihMisPatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sih_mis_patients', function (Blueprint $table) {
            $table->char('mr_no', 20)->primary();
            $table->char('sur_name', 30);
            $table->char('first_name', 20);
            $table->char('middle_name', 20);
            $table->char('last_name', 20);
            $table->char('gender', 1);
            $table->date('dob');
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
        Schema::dropIfExists('sih_mis_patients');
    }
}
