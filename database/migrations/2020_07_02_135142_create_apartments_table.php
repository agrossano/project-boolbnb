<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->string('rooms_number');
            $table->string('toilets_number');
            $table->string('beds_number');
            $table->string('square_metres');
            $table->integer('views');
            $table->integer('price_per_day');
            $table->string('image');
            $table->bigInteger('user_id')-> unsigned()-> index();
            $table->bigInteger('location_id')-> unsigned()-> index();
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
        Schema::dropIfExists('apartments');
    }
}
