<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignacions', function (Blueprint $table) {
            $table->id();

            $table->string('sistema', 100);
            $table->string('office', 100);
            $table->string('ip', 100);
            $table->string('nombre', 100);

            //llave foranea de responsables
            $table->unsignedBigInteger('responsable_id')->nullable();
            $table->foreign('responsable_id')->references('id')->on('responsables')->onDelete('set null');

            //llave foranea de computadora
            $table->unsignedBigInteger('computadora_id')->nullable();
            $table->foreign('computadora_id')->references('id')->on('computadoras')->onDelete('set null');

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
        Schema::dropIfExists('asignacions');
    }
}
