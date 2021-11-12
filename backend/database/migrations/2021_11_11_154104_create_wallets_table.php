<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWalletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wallets', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->bigInteger('coin')->nullable();
            $table->bigInteger('vnd_nums')->nullable();
            $table->integer('transaction_id')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->index('user_id', 'wallets_idx_user_id');
            $table->index('transaction_id', 'wallets_idx_transaction_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wallets');
    }
}
