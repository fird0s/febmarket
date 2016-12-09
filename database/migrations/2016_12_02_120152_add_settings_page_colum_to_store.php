<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSettingsPageColumToStore extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('store', function($table) {
          $table->integer('payment_bank')->default('1');
          $table->string('payment_number')->default(' ');
          $table->string('image_header')->default(' ');
          $table->string('sent_and_payment')->default(' ');
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
