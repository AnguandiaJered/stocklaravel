<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSortieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sortie', function (Blueprint $table) {
            $table->id();
            $table->integer('client_id')->unsigned();
            $table->integer('produit_id')->unsigned();           
            $table->integer('quantite');
            $table->integer('prix');
            $table->string('devise');
            $table->date('dateprovision');
            $table->timestamps();
            $table->foreign('client_id')->references('id')->on('client');
            $table->foreign('produit_id')->references('id')->on('produit');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sortie');
    }
}
