<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlertTableUpdateColNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone_nums')->nullable()->change();
            $table->string('email')->nullable()->change();
            $table->string('user_name')->nullable()->change();
        });

        Schema::table('compensations', function (Blueprint $table) {
            $table->string('compensation_doc_id')->nullable()->change();
            $table->string('hospital')->nullable()->change();
            $table->string('disease')->nullable()->change();
            $table->dateTime('date_end')->nullable()->change();
            $table->dateTime('date_start')->nullable()->change();
            $table->integer('province_id')->nullable()->change();
        });
    }
}
