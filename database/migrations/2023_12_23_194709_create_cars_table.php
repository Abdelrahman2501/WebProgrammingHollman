<?php
// database/migrations/<timestamp>_create_cars_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image_url');
            $table->string('gross_price');
            $table->string('net_price');
            $table->string('drive');
            $table->string('fuel_consumption');
            $table->string('co2_emissions');
            $table->string('co2_efficiency_rating');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
