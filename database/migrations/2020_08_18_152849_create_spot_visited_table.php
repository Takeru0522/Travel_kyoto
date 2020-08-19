<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpotVisitedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spot_visited', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('spot_id');
            // $table->foreign('spot_id')->references('id')->on('spots');
            $table->unsignedInteger('user_id');
            // $table->foreign('user_id')->references('id')->on('users');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spot_visited');
    }
}
