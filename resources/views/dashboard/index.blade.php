@extends('dashboard.dashboardApp')
@section('title', 'Dashboard - LifeCare')
@section('dashboard')

<div class="container mx-auto px-4 py-6">
    <div class="bg-white shadow-md rounded px-8 py-6">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-semibold ">User Profile</h1>
            <div class="space-x-2">
                <a href="{{url('edit-profile')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                <a class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</a>

            </div>
        </div>
        <hr class="my-5"/>
        <div class="flex justify-between gap-10">

            <div>
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-bold mb-2">UserID:</label>
                    <p class="text-gray-800">{{ $data->id }}</p>
                </div>
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
                    <p class="text-gray-800">{{ $data->name }}</p>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Email:</label>
                    <p class="text-gray-800">{{ $data->email }}</p>
                </div>
            </div>
            <div>
                <img class="w-44" src="https://static.vecteezy.com/system/resources/previews/011/675/374/original/man-avatar-image-for-profile-png.png" />
            </div>
        </div>
        <!-- Add more user profile information here -->
    </div>
</div>



@endsection