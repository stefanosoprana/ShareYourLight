<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SectionImage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('section_image', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('title');
        $table->string('slug');
        $table->string('image');
        $table->string('text');
        $table->string('age');
      });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('section_image');
    }
}
