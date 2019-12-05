<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Community extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('community', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('title');
        $table->string('slug');
        $table->text('description');
        $table->string('claim');
        $table->string('button');
        $table->string('button_link');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('community');
    }
}
