<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamDatas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_datas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->mediumText('image');
            $table->string('department_name');
            $table->string('member_name');
            $table->string('member_email');
            $table->string('member_more_details')->nullable();
            
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
        Schema::dropIfExists('team_datas');
    }
}
