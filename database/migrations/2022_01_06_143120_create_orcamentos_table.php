<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrcamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orcamentos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('numero');
            $table->string('veiculo');
            $table->string('placa');
            $table->string('situacao');
            $table->string('tipo');
            $table->string('secretaria');

            $table->float('valor');
            $table->float('porcento')->nullable();
            $table->float('valor_real');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orcamentos');
    }
}
