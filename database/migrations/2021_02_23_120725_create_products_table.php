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
            $table->string('name');
            $table->string('trad_name');
            $table->BigInteger('category_id');
            $table->string('country');
            $table->string('detail');
            $table->string('date');
            $table->BigInteger('price');
            $table->BigInteger('stock');
            $table->string('image1');
            $table->string('image2');
            $table->string('extra_detail');
            $table->string('company');

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
