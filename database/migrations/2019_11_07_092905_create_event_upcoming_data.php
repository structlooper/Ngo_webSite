<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventUpcomingData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_upcoming_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('event_name');
            $table->string('event_details',9000);
            $table->string('place');
            $table->string('duration_start');
            $table->string('duration_end');
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
        Schema::dropIfExists('event_upcoming_data');
    }
}
