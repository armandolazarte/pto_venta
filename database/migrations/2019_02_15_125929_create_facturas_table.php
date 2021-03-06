<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ptoventa');
            $table->integer('numfactura');
            $table->string('cuit');
            $table->date('fecha');
            $table->decimal('recargo');

            $table->decimal('total');

            $table->string('numafip')->nullable();
            $table->string('cae')->nullable();
            $table->string('fechavto')->nullable();
            $table->string('codbarra')->nullable();

            $table->unsignedInteger('cliente_id');
            $table->unsignedInteger('user_id');

            $table->timestamps();


            $table->foreign('user_id')->references('id')->on('users');

            $table->foreign('cliente_id')->references('id')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facturas');
    }
}
