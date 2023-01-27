<?php

use Brick\Math\BigInteger;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellerAuthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seller_auths', function (Blueprint $table) {
            $table->id();
            $table->string('name', 90);
            $table->string('email', 90);
            $table->string('password', 90);
            $table->BigInteger('mobile');
            $table->string('otp', 6);
            $table->string('profile', 80)->nullable();
            $table->string('remember_token', 80)->nullable();
            $table->tinyInteger('permission');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seller_auths');
    }
}
