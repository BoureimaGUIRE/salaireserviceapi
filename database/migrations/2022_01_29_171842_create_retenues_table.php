<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRetenuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retenues', function (Blueprint $table) {
            $table->id();
            $table->string('typeRetenue');
            $table->decimal('montantRetenue');
            $table->foreignId('bulletins_salaire_id')->constrained();
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
        Schema::table('retenues', function(Blueprint $table){
            $table->dropForeign('bulletins_salaire_id');
        });
        Schema::dropIfExists('retenues');
    }
}
