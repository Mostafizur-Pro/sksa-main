@extends('dashboard.dashboardApp')
@section('title', 'Dashboard - SKSA')
@section('dashboard')

<div class="container mx-auto px-4 py-6">
    <div class="bg-white shadow-md rounded px-8 py-6">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-semibold ">PROFILE</h1>


            <div class="flex space-x-2">

                <a href="{{ url('edit-profile', $data->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-none">Edit</a>

                <form method="POST" action="{{ route('deleteMainUser', $data->id) }}">
                    @csrf
                    @method('DELETE')
                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-none">Delete</button>
                </form>

            </div>
        </div>
        <hr class="my-5" />
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
                <img class="w-44" src="{{ $data->photo }}" />
            </div>
        </div>

        <!-- toast -->
        <div class="toast toast-top toast-center">
            @if(session('fail'))
            <div class="alert alert-error">
                {{ session('fail') }}
            </div>
            @endif
        </div>

        <!-- Add more user profile information here -->
    </div>
</div>

<script>
    // Wait for the document to be fully loaded
    document.addEventListener("DOMContentLoaded", function() {
        // Find the toast element
        const toast = document.querySelector('.toast');

        // Check if the toast element exists
        if (toast) {
            // Set a timeout to hide the toast after 5 seconds (5000 milliseconds)
            setTimeout(function() {
                toast.style.display = 'none';
            }, 5000); // 5000 milliseconds (5 seconds)
        }
    });
</script>




@endsection