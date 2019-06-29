<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntradasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entradas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_movimiento');
            $table->unsignedBigInteger('id_tipo_movimiento');
            $table->unsignedBigInteger('id_catalogo');
            $table->bigInteger('cantidad');
            $table->decimal('valor_total',12,2);
            $table->string('estado');
            $table->timestamps();
            $table->foreign('id_movimiento')->references('id')->on('movimientos');
            $table->foreign('id_tipo_movimiento')->references('id')->on('tipo_movimiento');
            $table->foreign('id_catalogo')->references('id')->on('catalogo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entradas', function (Blueprint $table){
            $table->dropForeign('entradas_id_movimiento_foreign');
            $table->dropForeign('entradas_id_tipo_movimiento_foreign');
            $table->dropForeign('entradas_id_catalogo_foreign');
        });
    }
}
