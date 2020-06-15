<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApiMarcacaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('api_marcacao', function (Blueprint $table) {
            $table->increments('id');
            $table->string('leitura_mes');
            $table->string('data');
            $table->string('hora');
            // $table->blob('foto');           
            $table->timestamps();

            $table->integer('endereco_id')->unsigned();
        });
        
        Schema::table('api_marcacao', function($table){
            $table->foreign('endereco_id')->references('id')->on('api_cliente_endereco')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('api_marcacao');
    }
}
