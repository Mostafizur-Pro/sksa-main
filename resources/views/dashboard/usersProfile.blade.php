@extends('dashboard.dashboardApp')
@section('title', 'All Register - SKSA')
@section('dashboard')

<div class="container mx-auto px-4 py-6">
    <div class="bg-white shadow-md rounded px-8 py-6">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-semibold ">User's Profile</h1>
            <form class="flex items-center" action="{{ route('search') }}" method="GET">
                <div>
                    <label for="search" class="block text-gray-700 font-bold rounded-none mb-2">Search:</label>
                    <input type="text" id="search" name="search" class="w-full border rounded-none py-2 px-3 text-gray-800">
                </div>
                <div class="mt-8">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-none">Search</button>
                </div>
            </form>
            <!-- <div class="space-x-2">
                <a href="{{url('edit-profile')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                <a class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</a>

            </div> -->
        </div>
        <hr class="my-5" />

        <table class="table">

            <thead>
                <tr class="text-center">

                    <th>UserID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                    @if($data->role == 'admin')
                    <th>Make Admin</th>
                    @endif
                </tr>
            </thead>
            <!-- ... -->
            @foreach($usersProfile as $user)
            
<!-- The button to open modal -->
<!-- <label for="my_modal_6" class="btn">open modal</label> -->

<!-- Put this part before </body> tag -->
<!-- <input type="checkbox" id="my_modal_6" class="modal-toggle" />
<div class="modal">
  <div class="modal-box">
    <h3 class="font-bold text-lg">Hello User!</h3>
    <p class="py-4">Loading ... {{$user->id}}</p>
    <div class="modal-action">
      <label for="my_modal_6" class="btn">Close!</label>
    </div>
  </div>
</div> -->
<!-- Put this part before </body> tag -->


            <tbody>
                <tr class="bg-base-200 @if ($data->email === $user->email) bg-green-100 @endif">
                    <th>{{$user->id}}</th>
                    <th> <img class="w-16 rounded-full" src="{{ $user->photo}}" alt="{{ $user->name }}"></th>
                    <th>{{$user->name}}</th>
                    <th>{{$user->email}}</th>
                    <th>{{$user->role}}</th>
                    <th>
                        @if ($data->email !== $user->email)

                        <div class="flex ">
                            <!-- The button to open modal -->
                            <label  for="my_modal_6" class="btn btn-sm bg-green-500 hover:bg-green-700 text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 512 512">
                                    <path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z" fill='white' />
                                </svg>
                            </label>


                            <a href="{{ url('edit-profile', $user->id) }}" class="btn btn-sm bg-blue-500  hover:bg-blue-700 text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <style>
                                        svg {
                                            fill: #ffffff
                                        }
                                    </style>
                                    <path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z" />
                                </svg>
                            </a>
                            <form method="POST" action="{{ route('deleteUser', $user->id) }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm bg-red-500 hover:bg-red-700 text-white ">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 512 512">
                                        <path d="M367.2 412.5L99.5 144.8C77.1 176.1 64 214.5 64 256c0 106 86 192 192 192c41.5 0 79.9-13.1 111.2-35.5zm45.3-45.3C434.9 335.9 448 297.5 448 256c0-106-86-192-192-192c-41.5 0-79.9 13.1-111.2 35.5L412.5 367.2zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z" fill='white' />
                                    </svg>
                                </button>
                            </form>

                        </div>


                        @else
                        <!-- <button class="btn btn-active btn-accent text-white" disabled>Active</button> -->
                        @endif
                    </th>
                    @if ( $data->role !== 'admin' )

                    @else
                    <th>


                        @if($user->role == 'admin')
                        <form method="POST" action="{{ route('makeUser', $user->id) }}">
                            @csrf
                            @if($user->email !== $data->email)


                            <button class="btn btn-sm bg-green-500 hover:bg-green-700 text-white font-bold  ">Make User</button>
                            @endif
                        </form>
                        @else

                        <form method="POST" action="{{ route('makeAdmin', $user->id) }}">
                            @csrf

                            <button class="btn btn-sm bg-blue-500 hover:bg-blue-700 text-white font-bold ">Make Amin</button>
                        </form>


                        @endif



                    </th>
                    @endif
                </tr>
            </tbody>
            
            @endforeach


            <!-- ... -->

        </table>
        <!-- Add more user profile information here -->

    </div>

</div>

<div class="my-5 pagination-container">
    {{ $usersProfile->links() }}
</div>

<style>
    .pagination-container .page-item.active .page-link {
        color: red;
        /* Change this to your desired color */
    }
</style>







<input type="checkbox" id="my_modal_6" class="modal-toggle" />
<div class="modal">
  <div class="modal-box">
    <h3 class="font-bold text-lg">Hello User!</h3>
    <p class="py-4">Loading ... </p>
    <div class="modal-action">
      <label for="my_modal_6" class="btn">Close!</label>
    </div>
  </div>
</div> 













@endsection