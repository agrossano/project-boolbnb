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
            $table->text('description');
            $table->integer('rooms_number')-> unsigned();
            $table->integer('toilets_number')-> unsigned();
            $table->integer('beds_number')-> unsigned();
            $table->integer('square_metres')-> unsigned();
            $table->string('price_per_day');
            $table->string('image');
            $table->string('address');
            $table->double('lat');
            $table->double('lon');
            $table->boolean('is_visible')-> default('1');
            $table->bigInteger('user_id')-> unsigned()-> index();
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
