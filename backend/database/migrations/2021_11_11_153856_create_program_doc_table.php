<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramDocTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_docs', function (Blueprint $table) {
            $table->id();
            $table->integer('document_id')->unsigned();
            $table->tinyInteger('program_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->index('document_id', 'program_docs_idx_document_id');
            $table->index('program_id', 'program_docs_idx_program_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('program_doc');
    }
}
