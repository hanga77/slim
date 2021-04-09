@extends('layouts.master')

@section('botton')
    <button class="btn inline font-extrabold float-right leading-tight hover:shadow-xl" style="color:#f80f26; display:inline-block">
        <a href="{{ route('contributors.index') }}" style="display: inline"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="30" style="display: inline">
            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M6 18L18 6M6 6l12 12" />
          </svg>Annuller</a>
    </button>
@stop

@section('container')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8 show">

    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg p-6">
        <form method="POST" action="{{ route('contributors.store') }}">
            {{ csrf_field() }}
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2 px-4 py-5 sm:px-6">
                    <div>
                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                            Les informations du contribuable  <strong>{{ $contributor->Noms_Prenoms }}</strong>
                        </h3>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500">
                            details personnel et administratives
                        </p>
                    </div>
                    <div style="display:inline-block; float:right; position:absolute; top:30%; left:75%">@include('layouts.partials.options_of_contributors')</div>
                </div>

                <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6 flex items-center justify-between border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l bg-gray-100">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-6 h-6 text-gray-500" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                                <div class="ml-1 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="text-gray-900 dark:text-white">Nationalité</a></div>
                            </div>
                            {{ $contributor->Nationalite }}
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l flex items-center justify-between bg-gray-100">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-6 h-6 text-gray-500" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                                <div class="ml-1 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="text-gray-900 dark:text-white">Sexe</a></div>
                            </div>
                            {{ $contributor->Sexe }}
                        </div>
                    </div>

                    <div class="grid grid-cols-1">
                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 flex items-center justify-between">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-6 h-6 text-gray-500" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                                <div class="ml-1 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="text-gray-900 dark:text-white">Date et Lieu de naissance</a></div>
                            </div>
                            {{ $contributor->Date_Naissance }}   |   {{ $contributor->Lieu_Naissance }}
                        </div>
                    </div>

                    <table class="table-fixed mt-10 border-collapse border border-gray-300 w-full">
                        <thead class="bg-gray-100">
                            <tr class="text-left">
                                <th class="w-1/6 border-gray-300 pl-2">Région d'origine</th>
                                <th class="w-1/6 border-gray-300 pl-2">Dpt d'origine</th>
                                <th class="w-1/6 border-gray-500 pl-2">Commune d'origine</th>
                                <th class="w-1/6 border-gray-300 pl-2">Village d'exercice</th>
                                <th class="w-1/6 border-gray-300 pl-2">Quartier d'exercice</th>
                                <th class="w-1/6 border-gray-300 pl-2">Lieu dit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border border-gray-300 pl-2">{{ $contributor->Region_Origine }}</td>
                                <td class="border border-gray-300 pl-2">{{ $contributor->Departement_origine }}</td>
                                <td class="border border-gray-300 pl-2">{{ $contributor->Commune_origine }}</td>
                                <td class="border border-gray-300 pl-2">{{ $contributor->Village_exercice }}</td>
                                <td class="border border-gray-300 pl-2">{{ $contributor->Quartier_exercice }}</td>
                                <td class="border border-gray-300 pl-2">{{ $contributor->Lieu_dit }}</td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table-fixed mt-10 border-collapse border border-gray-300">
                        <thead class="bg-gray-100">
                            <tr class="text-left">
                                <th class="w-1/6 border-gray-300 pl-2">Regime d'imposition</th>
                                <th class="w-1/6 border-gray-300 pl-2">Num. CNI</th>
                                <th class="w-1/6 border-gray-500 pl-2">Date de validité</th>
                                <th class="w-1/6 border-gray-300 pl-2">NIU</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border border-gray-300 pl-2">{{ $contributor->Regime_Imposition }}</td>
                                <td class="border border-gray-300 pl-2">{{ $contributor->Num_CNI }}</td>
                                <td class="border border-gray-300 pl-2">{{ $contributor->Validite_CNI }}</td>
                                <td class="border border-gray-300 pl-2">{{ $contributor->NIU }}</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="grid grid-cols-1 md:grid-cols-2 mt-10">
                        <div class="flex items-center justify-between p-6 bg-gray-100 m-0">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-1 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="text-gray-900 dark:text-white">Niveau d'études</a></div>
                            </div>
                            {{ $contributor->Niveau_Etudes }}
                        </div>

                        <div class="p-6 flex items-center justify-between border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l bg-gray-100">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-6 h-6 text-gray-500" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                                <div class="ml-1 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="text-gray-900 dark:text-white">Formations Pro</a></div>
                            </div>
                            {{ $contributor->Formation_Professionnelle }}
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="flex items-center justify-between p-6">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-6 h-6 text-gray-500" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                                <div class="ml-1 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="text-gray-900 dark:text-white">Situation matrimoniale</a></div>
                            </div>
                            {{ $contributor->Situation_Matrimoniale }}
                        </div>

                        <div class="p-6 flex items-center justify-between border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-6 h-6 text-gray-500" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                                <div class="ml-1 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="text-gray-900 dark:text-white">Nombre d'enfants</a></div>
                            </div>
                            {{ $contributor->Nombre_enfants }}
                        </div>
                    </div>

                    <table class="table-fixed mt-10 border-collapse border border-gray-300 w-full">
                        <thead class="bg-gray-100">
                            <tr class="text-left">
                                <th class="w-1/6 border-gray-300 pl-2">Métier</th>
                                <th class="w-1/6 border-gray-300 pl-2">Ancienneté</th>
                                <th class="w-1/6 border-gray-500 pl-2">Employeur</th>
                                <th class="w-1/6 border-gray-300 pl-2">employé</th>
                                <th class="w-1/6 border-gray-300 pl-2">Nbre d'employés</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border border-gray-300 pl-2">{{ $contributor->Metier }}</td>
                                <td class="border border-gray-300 pl-2">{{ $contributor->Anciennete }}</td>
                                <td class="border border-gray-300 pl-2">{{ $contributor->Employeur }}</td>
                                <td class="border border-gray-300 pl-2">{{ $contributor->Employe }}</td>
                                <td class="border border-gray-300 pl-2">{{ $contributor->Nombre_employes }}</td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table-fixed mt-10 border-collapse border border-gray-300 w-full">
                        <thead class="bg-gray-100">
                            <tr class="text-left">
                                <th class="w-1/6 border-gray-300 pl-2">CNPS</th>
                                <th class="w-1/6 border-gray-300 pl-2">Compte Bancaire</th>
                                <th class="w-1/6 border-gray-500 pl-2">Nom de la banque</th>
                                <th class="w-1/6 border-gray-300 pl-2">Secteur</th>
                                <th class="w-1/6 border-gray-300 pl-2">Filière</th>
                                <th class="w-1/6 border-gray-300 pl-2">Carte ART/COM</th>
                                <th class="w-1/6 border-gray-300 pl-2">Droit Licence annuel</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border border-gray-300 pl-2">{{ $contributor->CNPS }}</td>
                                <td class="border border-gray-300 pl-2">{{ $contributor->Compte_Bancaire }}</td>
                                <td class="border border-gray-300 pl-2">{{ $contributor->Nom_de_la_Banque }}</td>
                                <td class="border border-gray-300 pl-2">{{ $contributor->Secteur }}</td>
                                <td class="border border-gray-300 pl-2">{{ $contributor->Filiere }}</td>
                                <td class="border border-gray-300 pl-2">{{ $contributor->Carte_ART_COM }}</td>
                                <td class="border border-gray-300 pl-2">{{ $contributor->Droit_Licence_annuel }}</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="grid grid-cols-1 md:grid-cols-2 mt-10 ">
                        <div class="flex items-center justify-between p-6 bg-gray-100">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-6 h-6 text-gray-500" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                                <div class="ml-1 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="text-gray-900 dark:text-white">Tel</a></div>
                            </div>
                            {{ $contributor->Tel }}
                        </div>

                        <div class="p-6 flex items-center justify-between border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l bg-gray-100">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-6 h-6 text-gray-500" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                                <div class="ml-1 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="text-gray-900 dark:text-white">Whatsapp</a></div>
                            </div>
                            {{ $contributor->Whatsapp }}
                        </div>
                    </div>

                    <div class="grid grid-cols-1">
                        <div class="p-6 flex items-center justify-between border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-6 h-6 text-gray-500" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                                <div class="ml-1 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="text-gray-900 dark:text-white">Email</a></div>
                            </div>
                            {{ $contributor->Email }}
                        </div>
                    </div>

                    <table class="table-fixed mt-10 border-collapse border border-gray-300 w-full">
                        <thead class="bg-gray-100">
                            <tr class="text-left">
                                <th class="w-1/6 border-gray-300 pl-2">Tickets hebdo</th>
                                <th class="w-1/6 border-gray-300 pl-2">Impôt trimestriel</th>
                                <th class="w-1/6 border-gray-500 pl-2">Impôt annuel</th>
                                <th class="w-1/6 border-gray-300 pl-2">OTVP trimestriel</th>
                                <th class="w-1/6 border-gray-300 pl-2">OTVP annuel</th>
                                <th class="w-1/6 border-gray-300 pl-2">Patente</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border border-gray-300 pl-2">{{ $contributor->Tickets_hebdomadaire }}</td>
                                <td class="border border-gray-300 pl-2">{{ $contributor->Impot_Liberatoire_trimestriel }}</td>
                                <td class="border border-gray-300 pl-2">{{ $contributor->Impot_Liberatoire_annuel }}</td>
                                <td class="border border-gray-300 pl-2">{{ $contributor->OTVP_trimestriel }}</td>
                                <td class="border border-gray-300 pl-2">{{ $contributor->OTVP_annuel }}</td>
                                <td class="border border-gray-300 pl-2">{{ $contributor->Patente }}</td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table-fixed mt-10 border-collapse border border-gray-300 w-full">
                        <thead class="bg-gray-100">
                            <tr class="text-left">
                                <th class="w-1/6 border-gray-300 pl-2">Precompte sur loyer annuel</th>
                                <th class="w-1/6 border-gray-300 pl-2">Taxe foncière annuelle</th>
                                <th class="w-1/6 border-gray-500 pl-2">Bail mensuel</th>
                                <th class="w-1/6 border-gray-300 pl-2">Bail annuel</th>
                                <th class="w-1/6 border-gray-300 pl-2">Taxe de Developpement local</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border border-gray-300 pl-2">{{ $contributor->Precompte_sur_Loyer_annuel }}</td>
                                <td class="border border-gray-300 pl-2">{{ $contributor->Taxe_Fonciere_annuel }}</td>
                                <td class="border border-gray-300 pl-2">{{ $contributor->Bail_mensuel }}</td>
                                <td class="border border-gray-300 pl-2">{{ $contributor->Bail_annuel }}</td>
                                <td class="border border-gray-300 pl-2">{{ $contributor->TDL }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </form>


        <div>@include('layouts.partials.options_of_contributors')</div>

    </div>
@stop
