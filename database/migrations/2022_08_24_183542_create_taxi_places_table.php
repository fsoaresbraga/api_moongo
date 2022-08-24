<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxiPlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taxi_places', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('taxi_id')->nullable(false);
            $table->integer('cep');
            $table->string('street');
            $table->string('number')->nullable();
            $table->string('district');
            $table->string('complement')->nullable();
            $table->string('city');
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
        Schema::dropIfExists('taxi_places');
    }
}
