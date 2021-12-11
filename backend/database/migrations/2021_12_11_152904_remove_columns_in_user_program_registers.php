<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveColumnsInUserProgramRegisters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_program_registers', function (Blueprint $table) {
            //
            $table->dropColumn('start_at');
            $table->dropColumn('end_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_program_registers', function (Blueprint $table) {
            //
            $table->dateTime('start_at');
            $table->dateTime('end_at');
        });
    }
}
