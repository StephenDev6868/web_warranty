<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProgramRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_program_registers', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->integer('program_id')->unsigned();
            $table->integer('disease_id')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->dateTime('start_at')->unsigned();
            $table->dateTime('end_at')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->index('user_id', 'user_program_registers_idx_user_id');
            $table->index('program_id', 'user_program_registers_idx_program_id');
            $table->index('disease_id', 'user_program_registers_idx_disease_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_program_registers');
    }
}
