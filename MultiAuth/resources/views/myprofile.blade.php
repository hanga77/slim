<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @if(Auth::user()->hasRole('manager'))
                    Dashboard for Manager 
            @elseif(Auth::user()->hasRole('superadministrator'))
                    Dashboard for admin
            @elseif(Auth::user()->hasRole('user'))
                    Dashboard for User 
            @endif
             
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    @if(Auth::user()->hasRole('manager'))
                        You're logged in as an Manager <br>
                        your name is : {{ Auth::user()->name }} <br>
                        your  email address : {{ Auth::user()->email}}
                    @elseif(Auth::user()->hasRole('superadministrator'))
                        You're logged in as an Admin <br>
                        your name is : {{ Auth::user()->name }} <br>
                        your  email address : {{ Auth::user()->email}}
                    @elseif(Auth::user()->hasRole('user'))
                        You're logged in as an User <br>
                        your name is : {{ Auth::user()->name }} <br>
                        your  email address : {{ Auth::user()->email}}
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>