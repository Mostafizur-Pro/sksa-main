@extends('dashboard.dashboardApp')
@section('title', 'Dashboard - LifeCare')
@section('dashboard')


<div class="container mx-auto px-4 py-6">
    <div class="bg-white shadow-md rounded px-8 py-6">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-semibold">Edit Profile</h1>
            <div class="space-x-2">
                <a  href="{{url('dashboard')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Cancel</a>
                <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Save</button>
            </div>
        </div>
        <hr class="my-5"/>
        
        <form  method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">UserID:</label>
                <p class="text-gray-800">{{ $data->id }}</p>
            </div>
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
                <input type="text" id="name" name="name" value="{{ $data->name }}" class="w-full border rounded py-2 px-3 text-gray-800">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Email:</label>
                <input type="email" id="email" name="email" value="{{ $data->email }}" class="w-full border rounded py-2 px-3 text-gray-800">
            </div>
        </form>
    </div>
</div>



@endsection