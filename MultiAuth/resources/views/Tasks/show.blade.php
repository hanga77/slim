<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tasks List') }}
        </h2>
    </x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    	<div class="block mb-8">

    		<a href="{{route('tasks.index')}}" class="px-4 py-2 border-gray items-center bg-green-400 hover:bg-green-900 text-white mb-2" >Go Back</a>
    	</div>
   	<div class="flex flex-col">
   		<div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
   			<div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
   				<div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
   					
   						<table class="min-w-full divide-y divide-gray-200">
   							<thead>
   								<tr>

   									<th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs uppercase font-medium text-gray-500 tracin-wider">
   										ID
   									</th>

   									<th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs uppercase font-medium text-gray-500 tracin-wider">
   										Title
   									</th>
   									<th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs uppercase font-medium text-gray-500 tracin-wider">
   										Description
   									</th>


                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs uppercase font-medium text-gray-500 tracin-wider">
                      Date Creation
                    </th>

   									<th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs uppercase font-medium text-gray-500 tracin-wider">
   										Status
   									</th>

   									<th scope="col" class="px-6 py-3 bg-gray-50 text-left uppercase text-xs font-medium text-gray-500 tracin-wider">
   										Actions
   									</th>
   									<th scope='col' class="px-6 py-3 bg-gray-50">
   										<span class="sr-only">
   										Edit</span>
   									</th>
   								</tr>
   							</thead>
   							<tbody class="bg-white divide-y divide-gray-200">
   								<tr>
   									<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
   										{{$tasks->id}}
   									</td>

   									<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
   										{{$tasks->title}}
   									</td>

   									<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
   										{{$tasks->description}}
   									</td>


                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                      {{$tasks->created_at}}
                    </td>

   									<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
   										{{$tasks->statut}}
   									</td>
   									<td class=" px-6 py-4 whitespace-nowrap text-sm font-medium">
   									<a href="{{route('tasks.edit',$tasks->id)}}" class="text-indigo-600 hover:text-indigo-900">Edit</a>	
   									<form class="inline-block" method="POST" action="{{ route('tasks.destroy',$tasks->id)}}">
   										<input class="hidden" type="hidden" name="_method" value="DELETE">
   										<input class="hidden" type="hidden" name="_token" value="{{csrf_token()}}">
   										<input  type="submit" class="text-red-600 hover:text-red-900 mb-2" value="Delete">
   									</form>
   									</td>		
   								</tr>
   								
   							</tbody>
   						</table>
					
   				</div>
   				
    	
   			</div>
   			
   		</div>

        </div>
    </div>
</x-app-layout>
