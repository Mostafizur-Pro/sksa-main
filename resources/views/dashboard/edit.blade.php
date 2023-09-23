<!-- resources/views/edit-profile.blade.php -->

@extends('dashboard.dashboardApp')
@section('title', 'Edit Profile - SKSA')
@section('dashboard')

<div class="container mx-auto px-4 py-6">
    <div class="bg-white shadow-md rounded px-8 py-6">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-semibold">Edit Profile</h1>
            <div class="space-x-2">
                <a href="{{url('dashboard')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Cancel</a>
            </div>
        </div>
        <hr class="my-5" />

        <form action="{{ route('updateProfile', $editData->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

          <div class="flex justify-between">
          <div>
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-bold mb-2">UserID:</label>
                    <p class="text-gray-800">@if($data->role == 'admin') {{ $editData->id }} @else  {{ $data->id }} @endif</p>
                </div>
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
                    <input type="text" id="name" name="name" value="@if($data->role == 'admin') {{ $editData->name }} @else  {{ $data->name }} @endif " class="w-full border rounded py-2 px-3 text-gray-800">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Email:</label>
                    <input type="email" id="email" name="email" value="@if($data->role == 'admin') {{ $editData->email }} @else  {{ $data->email }} @endif" class="w-full border rounded py-2 px-3 text-gray-800" disabled>
                </div>
               
            </div>

            <div class="mb-4">
                <label for="profile_image" class="block text-gray-700 font-bold mb-2">Profile Image:</label>
              
                <!-- <img src="{{ asset($editData->photo) }}" alt="{{ $editData->name }}"> -->
                @if ($editData->photo)
                    <img class="w-32 mb-5 mx-auto" src="{{ asset($editData->photo) }}" alt="@if($data->role == 'admin') {{ $editData->name }} @else  {{ $data->name }} @endif" />
                    <!-- <img class="w-44" src="{{ $editData->photo }}" /> -->
                    
                @else
                    <img class="w-32 mb-5 mx-auto" src="https://static.vecteezy.com/system/resources/previews/011/675/374/original/man-avatar-image-for-profile-png.png" alt="Default Profile Image" />
                @endif
                <input type="file" name="photo" id="photo">
                <!-- <input type="file" id="photo" name="photo" class="w-full border rounded py-2 px-3 text-gray-800"> -->
                <p class="text-gray-600 text-sm">Upload a new profile image (optional)</p>
            </div>
          </div>

            <div class="mt-4">
                    <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Save Changes</button>
                </div>
        </form>
    </div>
</div>




@endsection
