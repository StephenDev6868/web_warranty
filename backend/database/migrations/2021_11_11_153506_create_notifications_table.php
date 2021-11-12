<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_to_all')->default(false)->nullable();
            $table->integer('user_id')->unsigned();
            $table->tinyInteger('type')->nullable();
            $table->tinyInteger('status')->default(1)->comment('1: pending | 2: sent | 3: fail');
            $table->string('title')->nullable();
            $table->text('content')->nullable();
            $table->integer('admin_id')->nullable();
            $table->dateTime('start_at')->nullable();
            $table->dateTime('end_at')->nullable();
            $table->timestamps();

            $table->index('user_id', 'notifications_idx_user_id');
            $table->index('admin_id', 'notifications_idx_admin_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notifications');
    }
}
