<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contributor extends Model
{
    use HasFactory;
    protected $fillable = ['Noms_Prenoms',
                           'Lieu_Naissance',
                           'Date_Naissance',
                           'Nationalite',
                           'Region_Origine',
                           'Departement_origine',
                           'Commune_origine',
                           'Sexe',
                           'Village_exercice',
                           'Quartier_exercice',
                           'Lieu_dit',
                           'Regime_Imposition',
                           'Num_CNI',
                           'Validite_CNI',
                           'NIU',
                           'Niveau_Etudes',
                           'Formation_Professionnelle',
                           'Situation_Matrimoniale',
                           'Nombre_enfants',
                           'Metier',
                           'Anciennete',
                           'Employeur',
                           'Employe',
                           'Nombre_employes',
                           'CNPS',
                           'Compte_Bancaire',
                           'Nom_de_la_Banque',
                           'Secteur',
                           'Filiere',
                           'Carte_ART_COM',
                           'Tel',
                           'Email',
                           'Whatsapp',
                           'Tickets_hebdomadaire',
                           'Impot_Liberatoire_trimestriel',
                           'Impot_Liberatoire_annuel',
                           'OTVP_trimestriel',
                           'OTVP_annuel',
                           'Droit_Licence_annuel',
                           'TDL',
                           'Patente',
                           'Precompte_sur_Loyer_annuel',
                           'Taxe_Fonciere_annuel',
                           'Bail_mensuel',
                           'Bail_annuel'
                        ];
   // public $timestamps = false;
}
