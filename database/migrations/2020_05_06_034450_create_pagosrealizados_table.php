<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagosrealizadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagosrealizados', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('clienteid');

          
            $table->integer('numeropago');
            $table->string('cantidad');
            
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
        Schema::dropIfExists('pagosrealizados');
    }
}
