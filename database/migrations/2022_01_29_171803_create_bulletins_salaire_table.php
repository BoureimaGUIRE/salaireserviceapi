<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBulletinsSalaireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bulletins_salaire', function (Blueprint $table) {
            $table->id();
            $table->decimal('salaireBase');
            $table->string('nombreHeureTravaille');
            $table->string('indemniteLogement');
            $table->string('indemniteTransport');
            $table->string('indemniteFonction');
            $table->decimal('salaireBrut');
            $table->string('retenueIUTS');
            $table->string('cotisationCNSS');
            $table->decimal('salaireNet');
            $table->decimal('montantPretPreleve');
            $table->decimal('salaireNetPaye');
            $table->string('moisBullletin');
            $table->string('anneeBullletin');
            $table->bigInteger('contrat_id')->unsigned();
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
        Schema::dropIfExists('bulletins_salaire');
    }
}
