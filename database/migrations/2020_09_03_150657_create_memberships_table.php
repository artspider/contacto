<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembershipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memberships', function (Blueprint $table) {
          $table->id();

          $table->unsignedSmallInteger('tipo')->default(0);
          $table->text('info');
          $table->date('fecha_inicio')->nullable();
          $table->date('fecha_termino')->nullable();
          $table->unsignedSmallInteger('status')->default(1);
          $table->unsignedInteger('expert_id');

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
        Schema::dropIfExists('memberships');
    }
}
