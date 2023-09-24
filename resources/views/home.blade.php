<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - SKSA</title>

    <!-- Tailwind CSS & Daisy ui -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.6.4/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>


    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-1D8/5C5w7Bav1c/6zj1l5N7I5t5zr3+/b/b5F5Bl5p3Bk5F5l5g5f5F5F5F5F5F5E5l5I5g5" crossorigin="anonymous"> -->


</head>

<body>
    @include('layout.navbar')
    @include('layout.menubar')
    <section>
        @include('components.home.slider')
        <!-- @include('components.home.banner') -->
        @include('components.home.congrats')
        @include('components.home.organizations')

        <h1 class="text-center my-20 text-3xl font-bold">Loading <span class=" loading loading-infinity text-red-400 loading-lg"></span> </h1>
    </section>
   <div>
   @include('layout.footer')
   </div>

</body>

</html>