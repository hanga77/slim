<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Update Tasks
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
		<div class="block mb-8">
    		<a href="{{route('tasks.index')}}" class="px-4 py-2 border-gray items-center bg-green-400 hover:bg-green-900 text-white mb-2" >Go Back</a>
    	</div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="POST" action="{{route('tasks.update',$task->id)}}">

            		{{ csrf_field() }}
                	<div class="shadow overflow-hidden sm:rounded-md">
                		<div class="px-4 py-5 bg-white sm:p-6">
                			<label for="title" class="block font-medium text-sm text-gray-800">Title</label>
                			<input type="text" name="title" id="title" value="{{$task->title}}" >

                			<label for="description" class="block font-medium text-sm text-gray-800">Description</label>
                			<textarea class="h-24 " type="text" name="description" id="description" >
								{{$task->description }}
							</textarea>
                			@error('description')
                			<p class="text-sm text-red-600">{{$message}}
                			</p>
                			@enderror
                		</div>
                		{{ method_field('PUT') }}
                		<div class="flex items-center justify-end px-4 py-3 bg-gray-50">
                			<button   class=" inline-flex items-center px-4 py-2 bg-gray-800 bg-green-500 hover:bg-green-700 text-white">
                				Update
                			</button>
                		</div>
                		
                	</div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
