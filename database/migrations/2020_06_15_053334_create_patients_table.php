<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('Pid');
            $table->string('Firstname');
            $table->string('Lastname');
            $table->string('DateofBirth');
            $table->string('Age');
            $table->string('CNIC');
            $table->string('Address');
            $table->string('Contactno');
            $table->string('Diseases');
            $table->string('Hospital');
            $table->string('City');
            $table->string('Others');
            $table->string('Postalcode');
            $table->string('Email');
            $table->string('Username');
            $table->string('Password');
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
        Schema::dropIfExists('patients');
    }
}
