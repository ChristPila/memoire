<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnneePromoEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annee_promo_etudiants', function (Blueprint $table) {
            $table->id();
            $table->foreignId("annee_promos_id")->constrained();
            $table->foreignId("etudiants_id")->constrained();
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('annee_promo_etudiants', function(Blueprint $table){
            $table->dropForeign(["annee_promos_id","etudiants_id"]);
        });
        Schema::dropIfExists('annee_promo_etudiants');
    }
}
