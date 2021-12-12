<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToWalletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('wallets', function (Blueprint $table) {
            //
            $table->integer('bank_id')->nullable();
            $table->tinyInteger('status')->default(1)->comment('1 Dang xu ly, 2 Da huy, 3 Thanh cong');
            $table->string('reference_code')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('wallets', function (Blueprint $table) {
            //
            $table->dropColumn('bank_id');
            $table->dropColumn('status');
            $table->dropColumn('reference_code');
        });
    }
}
