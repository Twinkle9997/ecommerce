<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            // user id
            $table->string('user_id');
            // materials
            $table->bigInteger('material_id');
            // vouchers
            $table->bigInteger('voucher_id');
            // vouchers
            $table->bigInteger('category_id');
            
            $table->string('product_name');
            $table->longText('details');
            $table->enum('voucher_start', [0, 1])->default(0);

            $table->enum('promote', [0,1])->default(0);
            $table->enum('display', [0,1])->default(1);

            $table->double('amount', 8, 2);
            $table->double('discounted_price', 8, 2);
            
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
        Schema::dropIfExists('products');
    }
}
