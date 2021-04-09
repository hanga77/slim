@extends('layouts.master')

@section('botton')
    <button class="btn inline font-extrabold float-right leading-tight hover:shadow-xl" style="color:#ffd900; display:inline-block">
        <a href="{{ route('contributors.index') }}" style="display: inline"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="30" style="display: inline">
            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M6 18L18 6M6 6l12 12" />
          </svg>Annuller</a>
    </button>
@stop

@section('container')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8 contributor-form create">
    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg p-6">
        <form method="POST" action="{{ route('contributors.store') }}">
            {{ csrf_field() }}
            <fieldset>
                <div class="input-box">
                    <label for="Noms_Prenoms">Nom & Prenoms</label>
                    <input type="text" name="Noms_Prenoms" value="jean parpain">
                </div>
                <div class="input-box">
                    <label for="Date_et_Lieu_Naissance">Date et lieu de naissance</label>
                    <div class="flex justify-between w-full">
                        <input type="text" name="Lieu_Naissance" placeholder="Lieu de naissance" class="w-2/3" value="bouda">
                        <input type="date" name="Date_Naissance" class="w-1/4" value="2021-03-20">
                    </div>
                </div>
                <div class="input-box">
                    <label for="Nationalite">Nationalité</label>
                    <input type="text" name="Nationalite" value="chinoise">
                </div>
                <br><hr><br>
                <div class="input-box">
                    <label for="Region_Origine">Region d'origine</label>
                    <input type="text" name="Region_Origine" value="centre">
                </div>
                <div class="input-box">
                    <label for="Departement_origine">Departement d'origine</label>
                    <input type="text" name="Departement_origine" value="Mfoundi">
                </div>
                <div class="input-box">
                    <label for="Commune_origine">Commune d'origine</label>
                    <input type="text" name="Commune_origine" value="yaoundé 11">
                </div>
                <div class="mt-4 flex w-full">
                    <span class="text-gray-700">Sexe</span>
                    <div class="ml-20">
                      <label class="inline-flex items-center">
                        <input type="radio" class="form-radio" name="Sexe" checked value="Masculin">
                        <span class="ml-2">Masculin</span>
                      </label>
                      <label class="inline-flex items-center ml-6">
                        <input type="radio" class="form-radio" name="Sexe" value="Feminin">
                        <span class="ml-2">Feminin</span>
                      </label>
                    </div>
                </div>


                @include('layouts.partials.bloc_btn_submit', ['type' => 'start'])
            </fieldset>

            <fieldset>
                <div class="input-box">
                    <label for="Village_exercice">Village d'exercice</label>
                    <input type="text" name="Village_exercice" value="Melen">
                </div>
                <div class="input-box">
                    <label for="Quartier_exercice">Quartier d'exercice</label>
                    <input type="text" name="Quartier_exercice" value="science">
                </div>
                <div class="input-box">
                    <label for="Lieu_dit">Lieu dit</label>
                    <input type="text" name="Lieu_dit" value="pond de science">
                </div>
                <div class="input-box">
                    <label for="Regime_Imposition">Regime d'imposition</label>
                    <input type="text" name="Regime_Imposition" value="elementaire">
                </div>
                <br><hr><br>
                <div class="input-box">
                    <label for="Num_CNI">Numéro de CNI</label>
                    <input type="text" name="Num_CNI" value="15896320725">
                </div>
                <div class="input-box">
                    <label for="Validite_CNI">Validite de la CNI</label>
                    <input type="date" name="Validite_CNI" value="27-07-2035">
                </div>
                <div class="input-box">
                    <label for="NIU">NIU</label>
                    <input type="text" name="NIU" value="fake">
                </div>
                <br><hr><br>
                <div class="input-box">
                    <label for="Niveau_Etudes">Niveau d'études</label>
                    <input type="text" name="Niveau_Etudes" value="Doctorat">
                </div>
                <div class="input-box">
                    <label for="Formation_Professionnelle">Formations professionnelles</label>
                    <input type="text" name="Formation_Professionnelle" value="agriculture, elevage, urgentisme">
                </div>

                @include('layouts.partials.bloc_btn_submit', ['type' => 'inter'])
            </fieldset>

            <fieldset>
                <div class="mt-4 flex w-full">
                    <span class="text-gray-700">Situation matrimoniale</span>
                    <div class="ml-20">
                      <label class="inline-flex items-center">
                        <input type="radio" class="form-radio" name="Situation_Matrimoniale" checked value="célibataire">
                        <span class="ml-2">Célibataire</span>
                      </label>
                      <label class="inline-flex items-center ml-6">
                        <input type="radio" class="form-radio" name="Situation_Matrimoniale" value="divorcé">
                        <span class="ml-2">Divorcé</span>
                      </label>
                      <label class="inline-flex items-center ml-6">
                        <input type="radio" class="form-radio" name="Situation_Matrimoniale" value="marié">
                        <span class="ml-2">Marié(e)</span>
                      </label>
                    </div>
                </div>
                <div class="input-box">
                    <label for="Nombre_enfants">Nombre d'enfants</label>
                    <input type="number" min="0" name="Nombre_enfants" value="23">
                </div>
                <br><hr><br>
                <div class="input-box">
                    <label for="Metier">Metier</label>
                    <input type="text" name="Metier" value="planteur">
                </div>
                <div class="input-box">
                    <label for="Anciennete">Ancienneté</label>
                    <input type="text" name="Anciennete" value="13 ans">
                </div>
                <br><hr><br>
                <div class="input-box">
                    <label for="Employeur">Employeur</label>
                    <input type="text" name="Employeur" value="Oui">
                </div>
                <div class="input-box">
                    <label for="Employe">Employé</label>
                    <input type="text" name="Employe" value="Non">
                </div>
                <div class="input-box">
                    <label for="Nombre_employes">Nombre d'employés</label>
                    <input type="number" name="Nombre_employes" value="41">
                </div>


                @include('layouts.partials.bloc_btn_submit', ['type' => 'inter'])
            </fieldset>

            <fieldset>
                <div class="input-box">
                    <label for="CNPS">CNPS</label>
                    <input type="text" min="0" name="CNPS" value="oui">
                </div>
                <div class="input-box">
                    <label for="Compte_Bancaire">Compte Bancaire</label>
                    <input type="text" name="Compte_Bancaire" value="12553254373">
                </div>
                <div class="input-box">
                    <label for="Nom_de_la_Banque">Nom de la Banque</label>
                    <input type="text" name="Nom_de_la_Banque" value="UBA Cameroun">
                </div>
                <br><hr><br>
                <div class="input-box">
                    <label for="Secteur">Secteur</label>
                    <input type="text" name="Secteur" value="Agriculture">
                </div>
                <div class="input-box">
                    <label for="Filiere">Filiere</label>
                    <input type="text" name="Filiere" value="Semeur">
                </div>
                <div class="input-box">
                    <label for="Carte_ART_COM">Carte ART/COM</label>
                    <input type="text" name="Carte_ART_COM" value="17A2415">
                </div>
                <br><hr><br>
                <div class="input-box">
                    <label for="Tel">Tel</label>
                    <input type="tel" name="Tel" value="+237697125011">
                </div>
                <div class="input-box">
                    <label for="Email">Email</label>
                    <input type="mail" name="Email" value="mymail237@gmail.com">
                </div>
                <div class="input-box">
                    <label for="Whatsapp">Whatsapp</label>
                    <input type="tel" name="Whatsapp" value="+23785967421">
                </div>


                @include('layouts.partials.bloc_btn_submit', ['type' => 'inter'])
            </fieldset>

            <fieldset>
                <div class="input-box">
                    <label for="Tickets_hebdomadaire">Tickets hebdomadaire</label>
                    <input type="number" min="0" name="Tickets_hebdomadaire" value="200">
                </div>
                <div class="input-box">
                    <label for="Impot_Liberatoire_trimestriel">Impot_Liberatoire trimestriel</label>
                    <input type="text" name="Impot_Liberatoire_trimestriel" value="12500">
                </div>
                <div class="input-box">
                    <label for="Impot_Liberatoire_annuel">Impot Liberatoire annuel</label>
                    <input type="text" name="Impot_Liberatoire_annuel" value="100000">
                </div>
                <br><hr><br>
                <div class="input-box">
                    <label for="OTVP_trimestriel">OTVP trimestriel</label>
                    <input type="text" name="OTVP_trimestriel" value="17500">
                </div>
                <div class="input-box">
                    <label for="OTVP_annuel">OTVP annuel</label>
                    <input type="text" name="OTVP_annuel" value="275000">
                </div>
                <div class="input-box">
                    <label for="Droit_Licence_annuel">Droit De Licence Annuel</label>
                    <input type="number" name="Droit_Licence_annuel" value="80000">
                </div>
                <div class="input-box">
                    <label for="TDL">Taxe De Developpement Local </label>
                    <input type="number" name="TDL" value="80000">
                </div>
                <div class="input-box">
                    <label for="Patente">Patente</label>
                    <input type="number" name="Patente" value="80000">
                </div>
                <br><hr><br>
                <div class="input-box">
                    <label for="Precompte_sur_Loyer_annuel">Precompte sur Loyer annuel</label>
                    <input type="text" name="Precompte_sur_Loyer_annuel" value="10500">
                </div>
                <div class="input-box">
                    <label for="Taxe_Fonciere_annuel">TaxeFonciere annuel</label>
                    <input type="text" name="Taxe_Fonciere_annuel" value="19500">
                </div>
                <div class="input-box">
                    <label for="Bail_mensuel">Bail mensuel</label>
                    <input type="text" name="Bail_mensuel" value="15000">
                </div>
                <div class="input-box">
                    <label for="Bail_annuel">Bail annuel</label>
                    <input type="text" name="Bail_annuel" value="180000">
                </div>

                @include('layouts.partials.bloc_btn_submit', ['type' => 'end'])
            </fieldset>
        </form>
    </div>
@stop
