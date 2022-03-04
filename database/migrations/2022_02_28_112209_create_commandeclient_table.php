<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandeclientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandeclient', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('produit_id');           
            $table->unsignedDecimal('quantite');
            $table->unsignedDecimal('prix');
            $table->string('devise');
            $table->date('datecmdclient');
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
        Schema::dropIfExists('commandeclient');
    }
}
