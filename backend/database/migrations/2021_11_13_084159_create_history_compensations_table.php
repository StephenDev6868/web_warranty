<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoryCompensationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_compensations', function (Blueprint $table) {
            $table->id();
            $table->dateTime('notify_date');
            $table->integer('mount_request');
            $table->string('doc_code')->comment('doc code');
            $table->tinyInteger('assurance_type');
            $table->integer('mount_pay');
            $table->string('reason_reduce');
            $table->tinyInteger('status');
            $table->integer('compensation_id');
            $table->integer('user_id');
            $table->timestamps();
            $table->softDeletes();

            $table->index('compensation_id', 'history_compensations_compensation_id');
            $table->index('user_id', 'history_compensations_user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('history_compensations');
    }
}
