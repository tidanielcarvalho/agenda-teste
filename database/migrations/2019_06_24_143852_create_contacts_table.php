<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 120);  // Nome não nulo limitado a 120 caracteres
            $table->string('phone');      // Telefone não nulo
            $table->string('email');      // Email não nulo
            $table->string('cep');        // Cep não nulo
            $table->string('rua');        // Rua não nulo retornado via API ViaCep
            $table->string('bairro');     // Bairro não nulo retornado via API ViaCep
            $table->string('cidade');     // Cidade não nulo retornado via API ViaCep
            $table->string('uf');         // UF não nulo retornado via API ViaCep
            $table->string('ibge');       // IBGE não nulo retornado via API ViaCep
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
        Schema::dropIfExists('contatos');
    }
}
