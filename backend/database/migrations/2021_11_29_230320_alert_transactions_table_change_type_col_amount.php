<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlertTransactionsTableChangeTypeColAmount extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transactions', function (Blueprint $table) {
            $table->dateTime('done_at')->nullable()->change();
            $table->bigInteger('user_id')->nullable()->change();
            $table->bigInteger('amount')->nullable()->change();
            $table->bigInteger('bank_id')->nullable()->change();
            $table->bigInteger('wallet_id')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transactions', function (Blueprint $table) {
            $table->integer('user_id')->nullable()->change();
            $table->integer('amount')->nullable()->change();
            $table->integer('bank_id')->nullable()->change();
            $table->integer('wallet_id')->nullable()->change();
        });
    }
}
