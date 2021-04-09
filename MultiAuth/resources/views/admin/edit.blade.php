<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Users
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
        <form method="POST" action="{{ route('users.store') }}">
            @csrf

            <div>
                <label for="name" value="{{ __('Name') }}" />
                <input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <label for="email" value="{{ __('Email') }}" />
                <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <label for="password" value="{{ __('Password') }}" />
                <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                    <div>
                        <div class="form-group row">
                            <label for="state" class="col-md-4 col-form-label text-md-right">State</label>
                            <div class="col-md-6">
                                <select name="role" class="form-control">
                                    <option value="" selected>----------------------------------------</option>
                                    @foreach($role as $action)
                                        @if($action->name !=="superadministrator")
                                           <option value="{{ $action->id }}">{{ $action->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
            </div>


                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50">
                            <button   class=" inline-flex items-center px-4 py-2 bg-gray-800 bg-green-500 hover:bg-green-700 text-white">
                                Create
                            </button>
                        </div>
            
        </form>
            </div>
        </div>
    </div>
</x-app-layout>


