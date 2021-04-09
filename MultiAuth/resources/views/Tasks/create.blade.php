<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Tasks
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
				<div class="block mb-8">
    				<a href="{{route('tasks.index')}}" class="px-4 py-2 border-gray items-center bg-green-400 hover:bg-green-900 text-white mb-2" >Go Back</a>
    			</div>
                <form method="post" action="{{route('tasks.store')}}">
                	@csrf
                	<div class="shadow overflow-hidden sm:rounded-md">
                		<div class="px-4 py-5 bg-white sm:p-6">

                            <label for="description" class="block font-medium text-sm text-gray-800">Title</label>
                            <input type="text" name="title" id="description" value="{{ old('Title','') }}">
                			<label for="description" class=" block font-medium text-sm text-gray-800">Description</label>
                			<input type="text" class="h-24" name="description" id="description" value="{{ old('description','') }}">
                			@error('description')
                			<p class="text-sm text-red-600">{{$message}}
                			</p>
                			@enderror
                		</div>
                		<div class="flex items-center justify-end px-4 py-3 bg-gray-50">
                			<button   class=" inline-flex items-center px-4 py-2 bg-gray-800 bg-green-500 hover:bg-green-700 text-white">
                				Create
                			</button>
                		</div>
                		
                	</div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
