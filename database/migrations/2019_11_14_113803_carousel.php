<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Carousel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('carousel', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('title');
        $table->string('slug');
        $table->string('subtitle1');
        $table->string('subtitle2');
        $table->text('text1');
        $table->text('text2');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('carousel');
    }
}
