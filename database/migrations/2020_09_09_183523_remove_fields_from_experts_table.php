<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveFieldsFromExpertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('experts', function (Blueprint $table) {
          $table->dropColumn('paterno');
          $table->dropColumn('materno');
          $table->dropColumn('universidad');
          $table->dropColumn('terminacion_estudios');
          $table->dropColumn('sigue_estudiando');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('experts', function (Blueprint $table) {
          $table->string('paterno');
          $table->string('materno');
          $table->string('universidad');
          $table->string('terminacion_estudios');
          $table->string('sigue_estudiando');
        });
    }
}
