<x-layout>
    <x-slot:header>
        Read Page.
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
      </div>
    @endforeach
 </div>
        
      
</x-layout>
