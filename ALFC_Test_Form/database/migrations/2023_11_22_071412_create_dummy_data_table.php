<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDummyDataTable extends Migration
{
    public function up()
    {
        Schema::create('dummy_data', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('Policy');
            $table->string('Address');
            $table->date('Birthdate');
            $table->string('Birthplace');
            $table->string('Contact_No');
            $table->string('Company');
            $table->string('Position');
            $table->string('Existing_Insurance_Provider');
            $table->string('Status');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dummy_data');
    }
}

