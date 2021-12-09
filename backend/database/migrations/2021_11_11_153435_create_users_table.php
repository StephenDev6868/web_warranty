<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('phone_nums')->unsigned()->unique();
            $table->string('user_name');
            $table->string('email');
            $table->date('birthday')->nullable();
            $table->tinyInteger('sex')->nullable()->comment('1: Male | 2: Female | 3: other');
            $table->string('id_card_num')->nullable();
            $table->string('hi_card_num')->nullable();
            $table->string('phone_num_parent')->nullable();
            $table->text('id_card_image_front')->nullable();
            $table->text('id_card_image_back')->nullable();
            $table->text('portrait_image')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->index('phone_nums', 'users_idx_phone_nums');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
