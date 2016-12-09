<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('store', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('author');
          $table->string('store_name');
          $table->string('slug_url')->unique();
          $table->string('map_latitude');
          $table->string('map_longtitude');
          $table->string('address');
          $table->string('postal_code');
          $table->longText('about');
          $table->integer('page_viewer');
          $table->string('store_logo');
          $table->integer('city');
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
