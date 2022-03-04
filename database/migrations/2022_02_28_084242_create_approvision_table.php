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
            $table->unsignedBigInteger('produit_id');
            $table->unsignedBigInteger('fournisseur_id');
            $table->unsignedDecimal('quantite');
            $table->unsignedDecimal('prix');
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
