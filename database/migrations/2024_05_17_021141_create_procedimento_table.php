<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcedimentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procedimento', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('espec_id');
            $table->uuid('proc_codigo');
            $table->string('proc_nome');
            $table->string('proc_valor');
            $table->timestamps();

            $table->foreign('espec_id')->references('id')->on('especialidade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('procedimento');
    }
}
