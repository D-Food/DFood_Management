<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBanksUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banks_users', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('accont_name');
            $table->string('pin_code');
            $table->string('phone_number');
            $table->string('balance');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banks_users');
    }
}
