<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialMedia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('social_media', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('author');
          $table->string('facebook');
          $table->string('twitter');
          $table->string('BBM');
          $table->string('gplus');
          $table->string('instagram');
          $table->string('pinterest');
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
