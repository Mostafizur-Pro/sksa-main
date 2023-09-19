@extends('dashboard.dashboardApp')
@section('title', 'Dashboard - LifeCare')
@section('dashboard')

<div class="container mx-auto px-4 py-6">
    <div class="bg-white shadow-md rounded px-8 py-6">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-semibold ">All User Profile</h1>
            <!-- <div class="space-x-2">
                <a href="{{url('edit-profile')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                <a class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</a>

            </div> -->
        </div>
        <hr class="my-5" />

        <table class="table">

            <thead>
                <tr>

                    <th>UserID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Active</th>
                    @if($data->role == 'admin')
                    <th>Make Admin</th>
                    @endif
                </tr>
            </thead>
            <!-- ... -->
            @foreach($allUser as $user)
            <tbody>
                <tr class="bg-base-200 @if ($data->email === $user->email) bg-green-100 @endif">
                    <th>{{$user->id}}</th>
                    <th>{{$user->name}}</th>
                    <th>{{$user->email}}</th>
                    <th>{{$user->role}}</th>
                    <th>
                        @if ($data->email !== $user->email)
                        <form method="POST">
                            @csrf
                            @method('DELETE')
                            <div class="flex space-x">
                                <a href="{{ url('edit') }}" class="btn bg-blue-500 hover:bg-blue-700 text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z" fill='white' />
                                    </svg>
                                </a>
                                <a href="{{ url('delete') }}" class="btn bg-red-500 hover:bg-red-700 text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path d="M367.2 412.5L99.5 144.8C77.1 176.1 64 214.5 64 256c0 106 86 192 192 192c41.5 0 79.9-13.1 111.2-35.5zm45.3-45.3C434.9 335.9 448 297.5 448 256c0-106-86-192-192-192c-41.5 0-79.9 13.1-111.2 35.5L412.5 367.2zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z" fill='white' />
                                    </svg>
                                </a>

                            </div>

                        </form>
                        @else
                        <!-- <button class="btn btn-active btn-accent text-white" disabled>Active</button> -->
                        @endif
                    </th>
                    <th> @if ($data->email == $user->email)
                        
                        @else
                        @if($data->role == 'admin')
                        <a href="{{url('edit-profile')}}" class="btn bg-blue-500 hover:bg-blue-700 text-white font-bold  rounded">Make Amin</a>
                        @endif

                        @endif
                     


                    </th>
                </tr>
            </tbody>
            @endforeach


            <!-- ... -->

        </table>
        <!-- Add more user profile information here -->
    </div>
</div>



@endsection