<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('product', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('owner');
          $table->string('product_name');
          $table->integer('price_product');
          $table->integer('category');
          $table->integer('sub_category');
          $table->integer('condition');
          $table->integer('stock');
          $table->integer('weight');
          $table->string('images');
          $table->integer('viewer')->default(1);
          $table->string('information_product');
          $table->string('sent_and_payment');
          $table->string('slug_url');
          $table->integer('status');
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
        //
    }
}
