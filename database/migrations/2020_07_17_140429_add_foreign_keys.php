<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // relazione apartment user 1 -> N
        Schema::table('apartments', function (Blueprint $table){
            $table->foreign('user_id', 'user')
            -> references('id')
            -> on('users')
            -> onDelete('cascade');
        });
        // relazione user message, 1 -> N
        Schema::table('messages', function (Blueprint $table){
            $table->foreign('apartment_id', 'apartment_message')
            -> references('id')
            -> on('apartments')
            -> onDelete('cascade');
        });
        Schema::table('partnerships', function (Blueprint $table){
            $table->foreign('apartment_id', 'apartment')
            -> references('id')
            -> on('apartments')
            -> onDelete('cascade');
            $table->foreign('package_id', 'package')
            -> references('id')
            -> on('packages')
            -> onDelete('cascade');
        });
        Schema::table('apartment_service', function (Blueprint $table) {
            $table->foreign('apartment_id', 'apartment_service')
                ->references('id')
                ->on('apartments')
                ->onDelete('cascade');
            $table->foreign('service_id', 'service_apartment')
                ->references('id')
                ->on('services')
                ->onDelete('cascade');
        });
        Schema::table('views', function (Blueprint $table) {
            $table->foreign('apartment_id', 'apartment_view')
                ->references('id')
                ->on('apartments')
                ->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('apartments', function (Blueprint $table){
            $table ->dropForeign('user');
        });
        Schema::table('messages', function (Blueprint $table){
            $table->dropForeign('apartment_message');
        });
        Schema::table('partnerships', function (Blueprint $table){
            $table ->dropForeign('apartment');
            $table ->dropForeign('package');
        });
        Schema::table('apartment_service', function (Blueprint $table) {
            $table -> dropForeign('apartment_service');
            $table -> dropForeign('service_apartment');
        });
        Schema::table('sessions', function (Blueprint $table){
            $table->dropForeign('apartment_view');
        });

    }
}
