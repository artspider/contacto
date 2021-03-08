<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSubcategoriaTagPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcategoria_tag', function (Blueprint $table) {
            $table->integer('subcategoria_id')->unsigned()->index();
            $table->foreign('subcategoria_id')->references('id')->on('subcategoria')->onDelete('cascade');
            $table->integer('tag_id')->unsigned()->index();
            //$table->foreign('tag_id')->references('id')->on('tag')->onDelete('cascade');
            $table->primary(['subcategoria_id', 'tag_id']);

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
        Schema::dropIfExists('subcategorium_tag');
    }
}
