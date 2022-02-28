<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandecompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandecompany', function (Blueprint $table) {
            $table->id();
            $table->integer('fournisseur_id')->unsigned();
            $table->integer('produit_id')->unsigned();           
            $table->integer('quantite');
            $table->integer('prix');
            $table->string('devise');
            $table->date('datecmd');
            $table->timestamps();
            $table->foreign('fournisseur_id')->references('id')->on('fournisseur');
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
        Schema::dropIfExists('commandecompany');
    }
}
