<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouriersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('couriers', function (Blueprint $table) {
            $table->id();
            // user id
            $table->string('user_id');
            
            $table->bigInteger('product_id');
            
            $table->integer('delivery_charges')->nullable();
            
            $table->double('width', 8, 2)->nullable();
            $table->double('height', 8, 2)->nullable();
            $table->double('weight', 8, 2)->nullable();
            $table->enum('return', [0, 1])->default(0);
            
            // $table->enum('start', [0, 1])->default(0);
            // $table->dateTime("startDate")->nullable();
            // $table->dateTime("endDate")->nullable();

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
        Schema::dropIfExists('couriers');
    }
}
