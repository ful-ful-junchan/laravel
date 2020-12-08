<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_account_t', function (Blueprint $table) {
            $table->increments('user_account_id');
            $table->string('account_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamp('expire_date');
            $table->integer('role');
            $table->timestamps();
            $table->softDelete();

            $table->index('expire_date', 'idx_expire');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_account_t');
    }
}
