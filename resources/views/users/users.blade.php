<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @if ( session('status') )
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-5">
                <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-gray-800 dark:text-green-400" role="alert">
                    <span class="font-medium">Success alert!</span> {{ session('status') }} 
                </div>
            </div>
        @endif

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">


                    <h2 class='float-left'> 
                        {{$header}}
                    </h2>
                    <a href="{{url('/users/add')}}">
                    <button data-modal-target="staticModal" data-modal-toggle="staticModal" class="float-right rounded-full bg-sky-500 p-1 hover:bg-sky-700" type="button">
                        Add Users
                    </button>
                    </a>
                    <table class="table-auto w-full">
                        <thead>
                          <tr class="text-center">
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>

                            @foreach ($users as $users)
                                
                          <tr class="text-center">
                                <td>{{$users->name}}</td>
                                <td>{{$users->email}}</td>
                                <td>
                                    <button class="rounded-full bg-sky-500 p-1 hover:bg-sky-700 ">Update</button>
                                    <button class="rounded-full bg-sky-500 p-1 hover:bg-sky-700 ">Delete</button>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
