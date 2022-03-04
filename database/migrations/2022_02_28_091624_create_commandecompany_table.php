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
            $table->unsignedBigInteger('fournisseur_id');
            $table->unsignedBigInteger('produit_id');           
            $table->unsignedDecimal('quantite');
            $table->unsignedDecimal('prix');
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
