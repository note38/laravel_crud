<x-layout>
    <x-slot:header>
        Edit Profile: {{$profile->name}}
    </x-slot:header>

    <form method="POST" action="/update/{{$profile->id}}">
        @csrf
        @method('PATCH')
        <section class="py-40 bg-gray-100  bg-opacity-50 h-screen">
            <div class="mx-auto container max-w-2xl md:w-3/4 shadow-md">
             
              <div class="bg-white space-y-6">
                <div class="md:inline-flex space-y-4 md:space-y-0 w-full p-4 text-gray-500 items-center">
                  <h2 class="md:w-1/3 max-w-sm mx-auto">Account</h2>
                  <div class="md:w-2/3 max-w-sm mx-auto">
                    <label class="text-sm text-gray-400">Email</label>
                    <div class="w-full inline-flex border">
                      <div class="pt-2 w-1/12 bg-gray-100 bg-opacity-50">
                        <svg
                          fill="none"
                          class="w-6 text-gray-400 mx-auto"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                          />
                        </svg>
                      </div>
                      <input
                        type="email"
                        class="w-11/12 focus:outline-none focus:text-gray-600 p-2"
                        placeholder="email@example.com"
                        value="{{ $profile->email }}"
                        disabled
                      />
                    </div>
                  </div>
                </div>
      
                <hr />
                <div class="md:inline-flex  space-y-4 md:space-y-0  w-full p-4 text-gray-500 items-center">
                  <h2 class="md:w-1/3 mx-auto max-w-sm">Personal info</h2>
                  <div class="md:w-2/3 mx-auto max-w-sm space-y-5">
                    <div>
                      <label class="text-sm text-gray-400">Full name</label>
                      <div class="w-full inline-flex border">
                        <div class="w-1/12 pt-2 bg-gray-100">
                          <svg
                            fill="none"
                            class="w-6 text-gray-400 mx-auto"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                          >
                            <path
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                            />
                          </svg>
                        </div>
                        <input
                          type="text"
                          class="w-11/12 focus:outline-none focus:text-gray-600 p-2"
                          placeholder="Charly Olivas"
                          name="name"
                          value="{{ $profile->name }}"
                        />
                      </div>
                    </div>
                    <div>
                      <label class="text-sm text-gray-400">Phone number</label>
                      <div class="w-full inline-flex border">
                        <div class="pt-2 w-1/12 bg-gray-100">
                          <svg
                            fill="none"
                            class="w-6 text-gray-400 mx-auto"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                          >
                            <path
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"
                            />
                          </svg>
                        </div>
                        <input
                          type="text"
                          class="w-11/12 focus:outline-none focus:text-gray-600 p-2"
                          placeholder="12341234"
                          name="phone_number"
                          value="{{ $profile->phone_number }}"
                        />
                      </div>
                    </div>
                  </div>
                </div>
      
                <hr />
                <div class="md:inline-flex w-full space-y-4 md:space-y-0 p-8 text-gray-500 items-center">
                 
                  <div class="md:w-5/12 w-full md:pl-9 max-w-sm mx-auto space-y-5 md:inline-flex">
                    <div class="w-full flex justify-center">

                      <a href="{{ route('update') }}" class="bg-white hover:bg-gray-100 border text-gray-800 font-semibold py-3 pb-[1rem] px-5">Cancel</a>
                      <button type="submit"  class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2.5 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">Update</button>
                          
                    </div>
                    
                  </div>
      
                 
      
                <hr />
                
              </div>
            </div>
        </section>
    </form>

</x-layout>

