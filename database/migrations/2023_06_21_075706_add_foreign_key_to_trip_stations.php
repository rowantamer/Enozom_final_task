<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trip_stations', function (Blueprint $table) {
            $table->unsignedBigInteger('trip_id');
            $table->unsignedBigInteger('station_id');
            $table->foreign('trip_id')->references('id')->on('trips');
            $table->foreign('station_id')->references('id')->on('stations');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trip_stations', function (Blueprint $table) {
            //
        });
    }
};
