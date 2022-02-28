<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprovisionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('approvision', function (Blueprint $table) {
            $table->id();
            $table->integer('produit_id')->unsigned();
            $table->integer('fournisseur_id')->unsigned();
            $table->integer('quantite');
            $table->integer('prix');
            $table->string('devise');
            $table->date('dateprovision');
            $table->timestamps();
            $table->foreign('produit_id')->references('id')->on('produit');
            $table->foreign('fournisseur_id')->references('id')->on('fournisseur');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('approvision');
    }
}
