@livewireScripts

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight inline-block">
            {{ __('Contributors') }}
        </h2>
        @yield('botton')
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    @yield('container')
                </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
@livewireScripts
<script src="{{ asset('js/larails.js') }}"></script>
