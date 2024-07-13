<x-layout>
    <x-slot:header>
        Delete Page.
    </x-slot:header>
    <div class="mx-auto max-w-7xl py-4 grid grid-cols-5 grid-rows-5 gap-4">
        @foreach ( $profiles as $profile )
        
    
         <div class="bg-gray-800 text-white w-full max-w-md flex flex-col rounded-xl shadow-lg p-4 ">
            <div class="flex items-center justify-between">
              <div class="flex items-center space-x-4">
               
                <div class="text-md font-bold">{{ $profile['name'] }}</div>
              </div>
              
            </div>
            <div class="mt-4 text-gray-500 font-bold text-sm">
                {{ $profile['email'] }}
            </div>
            <div class="mt-4 text-gray-500 font-bold text-sm">
                {{ $profile['phone_number'] }}
            </div>
            <button form="delete_form" type="submit" class="focus:outline-black text-white text-sm mt-4 py-2 px-4 border-b-4 border-red-600 bg-red-500 hover:bg-red-400">Delete</button>
          </div>
          
        @endforeach
        <form action="/delete/{{ $profile->id }}" method="post" id="delete_form">
        @csrf
      @method('DELETE')
      </form>
     </div>
</x-layout>
