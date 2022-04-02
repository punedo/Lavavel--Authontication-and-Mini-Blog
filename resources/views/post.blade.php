<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post') }}
        </h2>
    </x-slot>

  <div class="row">
     <form method="POST">
         @csrf
          <div class="container mx-auto">
              <div class="max-w-xl p-5 mx-auto my-10 bg-white rounded-md shadow-sm">
                  <div>
                      <form action="" method="POST">
                          <div class="mb-6">
                              <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                  Title
                              </label>

                              <input
                                  type="text"
                                  name="title"
                                  placeholder="John Doe"
                                  required
                                  class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md  focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"/>
                          </div>
                          <div class="mb-6">
                              <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                  Post
                              </label>

                              <textarea
                                  rows="5"

                                  placeholder="Your Message" name="body"
                                  class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md  focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
                                  required></textarea>
                          </div>
                          <div class="mb-6" style="display: flex;justify-content: center;padding: 40px">


                              <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" style="background-color: red;">
                                Submit Post
                              </button>
                          </div>
                      </form>
                      @if(session()->has('status'))

                            {{session('status')}}
                        </div>
                      @endif
                  </div>
              </div>
          </div>

    </form>
</div>
</x-app-layout>
