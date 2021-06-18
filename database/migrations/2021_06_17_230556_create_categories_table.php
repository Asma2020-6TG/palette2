<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('color_id')->unsigned();
            $table->integer('palette_id')->unsigned();
         //   $table->foreign('color_id')
         //       ->references('id')
        //        ->on('colors')
        //        ->onDelete('cascade');
         //   $table->foreign('palette_id')
          //      ->references('id')
           //     ->on('palettes')
          //      ->onDelete('cascade');
          //  $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
