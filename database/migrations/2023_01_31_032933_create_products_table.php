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

            // materials
            $table->unsignedBigInteger('material_id');
            $table->foreign('material_id')->references('id')->on('materials');

            // vouchers
            $table->unsignedBigInteger('voucher_id');
            $table->foreign('voucher_id')->references('id')->on('vouchers');

            // vouchers
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');

            $table->string('product_name');
            $table->integer('quantity');
            $table->longText('details');
            $table->double('amount', 8, 2);
            $table->double('discounted_price', 8, 2);
            $table->double('width', 8, 2);
            $table->double('height', 8, 2);
            $table->double('weight', 8, 2);
            $table->enum('return', ['y', 'n']);
            $table->integer('courier');
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
