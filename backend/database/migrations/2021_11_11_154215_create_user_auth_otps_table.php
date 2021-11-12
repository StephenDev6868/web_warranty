<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAuthOtpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_auth_otps', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('phone_nums');
            $table->string('verified_code')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->dateTime('expried_at')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->index('user_id', 'user_auth_otps_idx_user_id');
            $table->index('phone_nums', 'user_auth_otps_idx_phone_nums');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_auth_otps');
    }
}
