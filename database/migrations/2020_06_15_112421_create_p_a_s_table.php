<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePASTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p_a_s', function (Blueprint $table) {
            $table->bigIncrements('Pid');
            $table->string('Firstname');
            $table->string('Lastname');
            $table->string('DateofBirth');
            $table->string('Age');
            $table->string('Contactno');
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
        Schema::dropIfExists('p_a_s');
    }
}
