<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoContatosTable extends Migration
{
    public function up()
{
    Schema::create('tipo_contatos', function (Blueprint $table) {
        $table->id();
        $table->string('nome'); // ← ESSA LINHA PRECISA EXISTIR!
        $table->text('descricao')->nullable();
        $table->timestamps();
    });
}

    public function down()
    {
        Schema::dropIfExists('tipo_contatos');
    }
}

