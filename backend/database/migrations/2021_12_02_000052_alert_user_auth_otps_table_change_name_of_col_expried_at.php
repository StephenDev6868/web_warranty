<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlertUserAuthOtpsTableChangeNameOfColExpriedAt extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_auth_otps', function (Blueprint $table) {
            $table->string('phone_nums')->nullable()->change();
            $table->renameColumn('expried_at', 'expired_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_auth_otps', function (Blueprint $table) {
            $table->renameColumn('expired_at', 'expried_at');
            $table->integer('phone_nums')->nullable()->change();
        });
    }
}
