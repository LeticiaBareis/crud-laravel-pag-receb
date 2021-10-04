<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecebimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recebimentos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('cliente', 255);
            $table->text('descricao');
            $table->decimal('valor_recebimento', 8,2);
            $table->date('data_recebimento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recebimentos');
    }
}
