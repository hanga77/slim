<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContributorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contributors', function (Blueprint $table) {
            $table->id();
            $table->string('Noms_Prenoms');
            $table->string('Lieu_Naissance');
            $table->string('Date_Naissance');
            $table->string('Nationalite');
            $table->string('Region_Origine');
            $table->string('Departement_origine');
            $table->string('Commune_origine');
            $table->string('Sexe');
            $table->string('Village_exercice');
            $table->string('Quartier_exercice');
            $table->string('Lieu_dit');
            $table->string('Regime_Imposition');
            $table->string('Num_CNI');
            $table->string('Validite_CNI');
            $table->string('NIU');
            $table->string("Niveau_Etudes");
            $table->string('Formation_Professionnelle');
            $table->string('Situation_Matrimoniale');
            $table->string('Nombre_enfants');
            $table->string('Metier');
            $table->string('Anciennete');
            $table->string('Employeur');
            $table->string('Employe');
            $table->string('Nombre_employes');
            $table->string('CNPS');
            $table->string('Compte_Bancaire');
            $table->string('Nom_de_la_Banque');
            $table->string('Secteur');
            $table->string('Filiere');
            $table->string('Carte_ART_COM');
            $table->string('Tel');
            $table->string('Email');
            $table->string('Whatsapp');
            $table->string('Tickets_hebdomadaire');
            $table->string('Impot_Liberatoire_trimestriel');
            $table->string('Impot_Liberatoire_annuel');
            $table->string('OTVP_trimestriel');
            $table->string('OTVP_annuel');
            $table->string('Droit_Licence_annuel');
            $table->string('TDL');
            $table->string('Patente');
            $table->string('Precompte_sur_Loyer_annuel');
            $table->string('Taxe_Fonciere_annuel');
            $table->string('Bail_mensuel');
            $table->string('Bail_annuel');
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
        Schema::dropIfExists('contributors');
    }
}
