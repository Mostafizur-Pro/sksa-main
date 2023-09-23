<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Default Title')</title>

    <!-- Include your CSS files here -->
    <link rel="stylesheet" href="{{ asset('public/assets/our-doctor.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/our-doctor.css') }}">

    <!-- Include your external CSS libraries if needed -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.6.4/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- <style>
        /* Custom CSS for the hover animation */
        .btn {
            position: relative;
            background: linear-gradient(90deg, #007ACC, #00B4F3);
            border: 2px solid transparent;
            transition: all 0.3s ease-in-out;
            overflow: hidden;
            color: white;
        }

        .btn:before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, #00B4F3, #007ACC);
            transition: all 0.3s ease-in-out;
        }

        .btn:hover {
            border-color: #00B4F3;
            color: #007ACC;
        }

        .btn:hover:before {
            left: 100%;
        }
    </style> -->
</head>

<body>
    <div class="grid grid-cols-4 gap-5">

        <div class="col-span-1">
            @include('layout.aside')
        </div>

        <div class="col-span-3">
        @include('layout.top')
            @yield('dashboard')
        </div>

    </div>

    <!-- Include your JavaScript at the end of the body section -->
    <script>
        // JavaScript to toggle between view and edit modes
        const editProfileBtn = document.getElementById('editProfileBtn');
        const userProfile = document.getElementById('userProfile');
        const editProfileForm = document.getElementById('editProfileForm');

        editProfileBtn.addEventListener('click', () => {
            userProfile.classList.toggle('hidden');
            editProfileForm.classList.toggle('hidden');
        });
    </script>
</body>

</html>
