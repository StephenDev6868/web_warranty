<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompensationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compensations', function (Blueprint $table) {
            $table->id();
            $table->integer('province_id')->unsigned();
            $table->string('compensation_package');
            $table->tinyInteger('treatment_type');
            $table->dateTime('date_start');
            $table->dateTime('date_end');
            $table->string('hospital');
            $table->string('disease');
            $table->timestamps();
            $table->softDeletes();

            $table->index('province_id', 'compensations_idx_province_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compensations');
    }
}
