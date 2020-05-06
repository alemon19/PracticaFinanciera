<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {
           
           $table->id('idprestamos');

           $table->unsignedBigInteger('clienteid');

            $table->string('cantidad');
            $table->string('nopagos');
            $table->string('cuota');
            $table->string('total');
            $table->date('fministracion');
            $table->date('fvencimiento');

            $table->timestamps();

           $table->foreign('clienteid')
           ->references('id')
           ->on('clientes');


            
           
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prestamos');
    }
}
