<x-layout>
    <x-slot:header>
        Update Page.
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
            <button type="button" class="focus:outline-black text-white mt-4 text-sm py-2 px-3 border-b-4 border-gray-600 bg-gray-500 hover:bg-gray-400">Update</button>
          </div>
          
        @endforeach
     </div>
</x-layout>
