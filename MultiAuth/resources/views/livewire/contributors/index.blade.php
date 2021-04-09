<div>
    <div class="flex justify-between items-center">
        <div class="w-2/4">
            <label for="search" class="sr-only">Search</label>
            <div class="flex">
                <input id="search" wire:model="search" type="search" name="search" placeholder="Recherche" class="w-full border-gray-300 px-2 border-blue rounded-sm" style="background: #000; color: #fff" />
                <select wire:model.lazy="groupSelect"  class="p-2 inline-flex text-md leading-5 font-semibold rounded-r-full font-black" style="border:none; outline: none;">
                    <option value="Noms_Prenoms">Name</option>
                    <option value="Nationalite">Nationality</option>
                    <option value="created_at">Date</option>
                </select>
            </div>
        </div>
        <div class="float-right m-2 border-4 border-green-200 rounded-full pl-2">
            Nombre de contribuable
            <select wire:model.lazy="paginate"  class="p-2 inline-flex text-md leading-5 font-semibold rounded-r-full bg-green-100 text-green-500 font-black" style="border:none; outline: none;">
                @for($i=5; $i<25; $i+=5)
                <option value="{{$i}}">{{$i}}</option>
                @endfor
            </select>
        </div>
    </div>

    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Noms & Prenoms</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nationalité</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Contacts</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    <th scope="col" class="relative px-6 py-3"><span class="sr-only">Edit</span></th>
                </tr>
            </thead>
            <tbody class="bg-white w-full divide-y divide-gray-200">
                <section>
                    @if(count($contributors) > 0)
                        @foreach ($contributors as $contributor)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{ $contributor->Noms_Prenoms }}
                                            </div>
                                            <div class="text-sm text-gray-400">
                                                {{ $contributor->Date_Naissance }} {{ $contributor->Lieu_Naissance }}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $contributor->Nationalite }}</div>
                                    <div class="text-sm text-gray-500">{{ $contributor->Region_Origine }} | {{ $contributor->Departement_origine }} | {{ $contributor->Commune_origine }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $contributor->Tel }}</div>
                                    <div class="text-sm text-gray-500">Whatsapp : {{ $contributor->Whatsapp }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Active
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap whitespace-nowrap text-right text-sm font-medium">
                                    <a href="{{ route('contributors.show', $contributor) }}" class="text-indigo-600 hover:text-indigo-900">
                                    	<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
										  <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
										  <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
										</svg>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        @else
                        <p class="text-center relative " style="top: 100px; color:rgb(0, 0, 0)">Pas de contribuable pour le moment</p>
                    @endif
                </section>
            </tbody>
        </table>
    </div>
    <div class="pagination" style="text-align:center; margin:10%">{{ $contributors->Links() }}</div>
</div>
