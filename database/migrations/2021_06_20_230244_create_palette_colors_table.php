<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaletteColorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('palette_colors', function (Blueprint $table) {
            $table->id();
            $table->integer('palette_id')->unsigned();
            $table->integer('color_id')->unsigned();
            $table->foreign('palette_id')
                ->references('id')
                ->on('palettes')
                ->onDelete('cascade');
            $table->foreign('color_id')
                ->references('id')
                ->on('colors')
                ->onDelete('cascade');
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
        Schema::dropIfExists('palette_colors');
    }
}
