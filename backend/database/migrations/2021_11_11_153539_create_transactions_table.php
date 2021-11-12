<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('amount');
            $table->integer('bank_id');
            $table->integer('wallet_id');
            $table->tinyInteger('status')->comment('1: pending | 2: succeed | 3: fail');
            $table->tinyInteger('type')->nullable();
            $table->dateTime('done_at');
            $table->string('code_transaction_bank');
            $table->string('code_reference');
            $table->timestamps();
            $table->softDeletes();

            $table->index('user_id', 'transactions_idx_user_id');
            $table->index('bank_id', 'transactions_idx_bank_id');
            $table->index('wallet_id', 'transactions_idx_wallet_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
