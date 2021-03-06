@extends('layouts.master')

@section('botton')
    <button class="btn inline font-extrabold float-right leading-tight hover:shadow-xl" style="color:#f80f26; display:inline-block">
        <a href="{{ route('contributors.index') }}" style="display: inline"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="30" style="display: inline">
            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M6 18L18 6M6 6l12 12" />
          </svg>Annuller</a>
    </button>
@stop

@section('container')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8 create">

    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg p-6 contributor-form">
        <form method="POST" action="{{ route('contributors.update', $contributor) }}">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <fieldset>
                <div class="input-box">
                    <label for="Noms_Prenoms">Nom & Prenoms</label>
                    <input type="text" name="Noms_Prenoms" value="{{ $contributor->Noms_Prenoms }}">
                </div>
                <div class="input-box">
                    <label for="Date_et_Lieu_Naissance">Date et lieu de naissance</label>
                    <div class="flex justify-between w-full">
                        <input type="text" name="Lieu_Naissance" placeholder="Lieu de naissance" class="w-2/3" value="{{ $contributor->Lieu_Naissance }}">
                        <input type="date" name="Date_Naissance" class="w-1/4" value="{{ $contributor->Date_Naissance }}">
                    </div>
                </div>
                <div class="input-box">
                    <label for="Nationalite">Nationalit√©</label>
                    <input type="text" name="Nationalite" value="{{ $contributor->Nationalite }}">
                </div>
                <br><hr><br>
                <div class="input-box">
                    <label for="Region_Origine">Region d'origine</label>
                    <input type="text" name="Region_Origine" value="{{ $contributor->Region_Origine }}">
                </div>
                <div class="input-box">
                    <label for="Departement_origine">Departement d'origine</label>
                    <input type="text" name="Departement_origine" value="{{ $contributor->Departement_origine }}">
                </div>
                <div class="input-box">
                    <label for="Commune_origine">Commune d'origine</label>
                    <input type="text" name="Commune_origine" value="{{ $contributor->Commune_origine }}">
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
                    <input type="text" name="Village_exercice" value="{{ $contributor->Village_exercice }}">
                </div>
                <div class="input-box">
                    <label for="Quartier_exercice">Quartier d'exercice</label>
                    <input type="text" name="Quartier_exercice" value="{{ $contributor->Quartier_exercice }}">
                </div>
                <div class="input-box">
                    <label for="Lieu_dit">Lieu dit</label>
                    <input type="text" name="Lieu_dit" value="{{ $contributor->Lieu_dit }}">
                </div>
                <div class="input-box">
                    <label for="Regime_Imposition">Regime d'imposition</label>
                    <input type="text" name="Regime_Imposition" value="{{ $contributor->Regime_Imposition }}">
                </div>
                <br><hr><br>
                <div class="input-box">
                    <label for="Num_CNI">Num√©ro de CNI</label>
                    <input type="text" name="Num_CNI" value="{{ $contributor->Num_CNI }}">
                </div>
                <div class="input-box">
                    <label for="Validite_CNI">Validite de la CNI</label>
                    <input type="date" name="Validite_CNI" value="{{ $contributor->Validite_CNI }}">
                </div>
                <div class="input-box">
                    <label for="NIU">NIU</label>
                    <input type="text" name="NIU" value="{{ $contributor->NIU }}">
                </div>
                <br><hr><br>
                <div class="input-box">
                    <label for="Niveau_Etudes">Niveau d'√©tudes</label>
                    <input type="text" name="Niveau_Etudes" value="{{ $contributor->Niveau_Etudes }}">
                </div>
                <div class="input-box">
                    <label for="Formation_Professionnelle">Formations professionnelles</label>
                    <input type="text" name="Formation_Professionnelle" value="{{ $contributor->Formation_Professionnelle }}">
                </div>


                @include('layouts.partials.bloc_btn_submit', ['type' => 'inter'])
            </fieldset>

            <fieldset>
                <div class="mt-4 flex w-full">
                    <span class="text-gray-700">Situation matrimoniale</span>
                    <div class="ml-20">
                      <label class="inline-flex items-center">
                        <input type="radio" class="form-radio" name="Situation_Matrimoniale" checked value="c√©libataire">
                        <span class="ml-2">C√©libataire</span>
                      </label>
                      <label class="inline-flex items-center ml-6">
                        <input type="radio" class="form-radio" name="Situation_Matrimoniale" value="divorc√©">
                        <span class="ml-2">Divorc√©</span>
                      </label>
                      <label class="inline-flex items-center ml-6">
                        <input type="radio" class="form-radio" name="Situation_Matrimoniale" value="mari√©">
                        <span class="ml-2">Mari√©(e)</span>
                      </label>
                    </div>
                </div>
                <div class="input-box">
                    <label for="Nombre_enfants">Nombre d'enfants</label>
                    <input type="number" min="0" name="Nombre_enfants" value="{{ $contributor->Nombre_enfants }}">
                </div>
                <br><hr><br>
                <div class="input-box">
                    <label for="Metier">Metier</label>
                    <input type="text" name="Metier" value="{{ $contributor->Metier }}">
                </div>
                <div class="input-box">
                    <label for="Anciennete">Anciennet√©</label>
                    <input type="text" name="Anciennete" value="{{ $contributor->Anciennete }}">
                </div>
                <br><hr><br>
                <div class="input-box">
                    <label for="Employeur">Employeur</label>
                    <input type="text" name="Employeur" value="{{ $contributor->Employeur }}">
                </div>
                <div class="input-box">
                    <label for="Employe">Employ√©</label>
                    <input type="text" name="Employe" value="{{ $contributor->Employe }}">
                </div>
                <div class="input-box">
                    <label for="Nombre_employes">Nombre d'employ√©s</label>
                    <input type="number" name="Nombre_employes" value="{{ $contributor->Nombre_employes }}">
                </div>
                @include('layouts.partials.bloc_btn_submit', ['type' => 'inter'])
            </fieldset>

            <fieldset>
                <div class="input-box">
                    <label for="CNPS">CNPS</label>
                    <input type="text" min="0" name="CNPS" value="{{ $contributor->CNPS }}">
                </div>
                <div class="input-box">
                    <label for="Compte_Bancaire">Compte Bancaire</label>
                    <input type="text" name="Compte_Bancaire" value="{{ $contributor->Compte_Bancaire }}">
                </div>
                <div class="input-box">
                    <label for="Nom_de_la_Banque">Nom de la Banque</label>
                    <input type="text" name="Nom_de_la_Banque" value="{{ $contributor->Nom_de_la_Banque }}">
                </div>
                <br><hr><br>
                <div class="input-box">
                    <label for="Secteur">Secteur</label>
                    <input type="text" name="Secteur" value="{{ $contributor->Secteur }}">
                </div>
                <div class="input-box">
                    <label for="Filiere">Filiere</label>
                    <input type="text" name="Filiere" value="{{ $contributor->Filiere }}">
                </div>
                <div class="input-box">
                    <label for="Carte_ART_COM">Carte ART/COM</label>
                    <input type="text" name="Carte_ART_COM" value="{{ $contributor->Carte_ART_COM }}">
                </div>
                <br><hr><br>
                <div class="input-box">
                    <label for="Tel">Tel</label>
                    <input type="tel" name="Tel" value="{{ $contributor->Tel }}">
                </div>
                <div class="input-box">
                    <label for="Email">Email</label>
                    <input type="mail" name="Email" value="{{ $contributor->Email }}">
                </div>
                <div class="input-box">
                    <label for="Whatsapp">Whatsapp</label>
                    <input type="tel" name="Whatsapp" value="{{ $contributor->Whatsapp }}">
                </div>


                @include('layouts.partials.bloc_btn_submit', ['type' => 'inter'])
            </fieldset>

            <fieldset>
                <div class="input-box">
                    <label for="Tickets_hebdomadaire">Tickets hebdomadaire</label>
                    <input type="number" min="0" name="Tickets_hebdomadaire" value="{{ $contributor->Tickets_hebdomadaire }}">
                </div>
                <div class="input-box">
                    <label for="Impot_Liberatoire_trimestriel">Impot_Liberatoire trimestriel</label>
                    <input type="text" name="Impot_Liberatoire_trimestriel" value="{{ $contributor->Impot_Liberatoire_trimestriel }}">
                </div>
                <div class="input-box">
                    <label for="Impot_Liberatoire_annuel">Impot Liberatoire annuel</label>
                    <input type="text" name="Impot_Liberatoire_annuel" value="{{ $contributor->Impot_Liberatoire_annuel }}">
                </div>
                <br><hr><br>
                <div class="input-box">
                    <label for="OTVP_trimestriel">OTVP trimestriel</label>
                    <input type="text" name="OTVP_trimestriel" value="{{ $contributor->OTVP_trimestriel }}">
                </div>
                <div class="input-box">
                    <label for="OTVP_annuel">OTVP annuel</label>
                    <input type="text" name="OTVP_annuel" value="{{ $contributor->OTVP_annuel }}">
                </div>
                <div class="input-box">
                    <label for="Droit_Licence_annuel">Droit De Licence Annuel</label>
                    <input type="text" name="Droit_Licence_annuel" value="{{ $contributor->Droit_Licence_annuel }}">
                </div>
                <div class="input-box">
                    <label for="TDL">Taxe De Developpement Local</label>
                    <input type="text" name="TDL" value="{{ $contributor->TDL }}">
                </div>
                <div class="input-box">
                    <label for="Patente">Patente</label>
                    <input type="number" name="Patente" value="{{ $contributor->Patente }}">
                </div>
                <br><hr><br>
                <div class="input-box">
                    <label for="Precompte_sur_Loyer_annuel">Precompte sur Loyer annuel</label>
                    <input type="text" name="Precompte_sur_Loyer_annuel" value="{{ $contributor->Precompte_sur_Loyer_annuel }}">
                </div>
                <div class="input-box">
                    <label for="Taxe_Fonciere_annuel">TaxeFonciere annuel</label>
                    <input type="text" name="Taxe_Fonciere_annuel" value="{{ $contributor->Taxe_Fonciere_annuel }}">
                </div>
                <div class="input-box">
                    <label for="Bail_mensuel">Bail mensuel</label>
                    <input type="text" name="Bail_mensuel" value="{{ $contributor->Bail_mensuel }}">
                </div>
                <div class="input-box">
                    <label for="Bail_annuel">Bail annuel</label>
                    <input type="text" name="Bail_annuel" value="{{ $contributor->Bail_annuel }}">
                </div>


                @include('layouts.partials.bloc_btn_submit', ['type' => 'end'])
            </fieldset>

        </form>
    </div>
@stop
