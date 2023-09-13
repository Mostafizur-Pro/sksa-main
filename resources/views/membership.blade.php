<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership - SKSA</title>

    <!-- Tailwind CSS & Daisy ui -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.6.4/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <!-- Navbar & Nemubar section -->
    @include('layout.navbar')
    @include('layout.menubar')
    <section>
        <!-- Banner Section -->
        @section('allPageBanner', 'Membership')
        @include('components/banner/allPageBanner')

        
        <h1 class="text-center my-20 text-3xl font-bold">Loading <span class=" loading loading-infinity text-red-400 loading-lg"></span> </h1>
    </section>
    <!-- Footer section -->
    @include('layout.footer')

</body>

</html>