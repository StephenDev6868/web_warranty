<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('login_id')->unsigned()->unique();
            $table->string('email')->nullable();
            $table->string('password');
            $table->dateTime('password_changed_at')->nullable();
            $table->tinyInteger('role')->nullable();
            $table->boolean('is_privilege')->default(false);
            $table->string('token')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->index('login_id', 'admins_idx_login_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
