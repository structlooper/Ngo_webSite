<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusTransactionToDonateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('donates', function (Blueprint $table) {
            $table->string('status')->after('pay_id');
            $table->string('transaction_id')->after('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('donates', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->dropColumn('transaction_id');
        });
    }
}
