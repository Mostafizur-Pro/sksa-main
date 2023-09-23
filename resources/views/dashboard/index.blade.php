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


<!-- {{ $data->photo }} -->


<!-- The button to open modal -->
<label for="my_modal_6"></label>

<!-- Put this part before </body> tag -->
<input type="checkbox" id="my_modal_6" class="modal-toggle" />
<div class="modal">
    <div class="modal-box">
        <h3 class="font-bold text-lg">Hello {{ $data->name }}!</h3>
      <div class="justify-center">
      <img class="w-44" src="{{ $data->photo }}" />
        <p class="py-4">Please upload your professional image!</p>
      </div>
        <div class="modal-action">
            <a href="{{ url('edit-profile', $data->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-none">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <style>
                        svg {
                            fill: #ffffff
                        }
                    </style>
                    <path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z" />
                </svg>
            </a>

            <label for="my_modal_6" class="btn bg-green-500 hover:bg-green-700 text-white rounded-none">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM175 175c-9.4 9.4-9.4 24.6 0 33.9l47 47-47 47c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l47-47 47 47c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-47-47 47-47c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-47 47-47-47c-9.4-9.4-24.6-9.4-33.9 0z"/></svg>
            </label>
        </div>
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




    document.addEventListener("DOMContentLoaded", function() {
        // Check the condition $data->photo !== 'photo'
        if ("{{ $data->photo }}" === 'https://static.vecteezy.com/system/resources/previews/011/675/374/original/man-avatar-image-for-profile-png.png') {
            // Set a timeout to open the modal after 3 seconds (3000 milliseconds)
            setTimeout(function() {
                const modalCheckbox = document.getElementById('my_modal_6');
                if (modalCheckbox) {
                    modalCheckbox.checked = true;
                }
            }, 3000);
        }
    });
</script>











@endsection