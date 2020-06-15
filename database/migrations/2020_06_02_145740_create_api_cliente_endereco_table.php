<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApiClienteEnderecoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {                                                                                                                                                                                                             
        Schema::create('api_cliente_endereco', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cep');
            $table->string('rua');
            $table->string('numero');
            $table->string('complemento');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');
            $table->string('num_hidro');
            $table->enum('tipoHidrometro',[
                'teste1',
                'teste2',
                ]);
            $table->enum('concessionaria',[
                    'teste3',
                    'teste4',
                ]);
            $table->timestamps();

            $table->integer('cliente_id')->unsigned();

        });

        Schema::table('api_cliente_endereco', function($table){
            $table->foreign('cliente_id')->references('id')->on('api_cliente')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('api_cliente_endereco');
    }
}
