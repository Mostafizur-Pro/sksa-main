<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leader - SKSA</title>

    <!-- Tailwind CSS & Daisy ui -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.6.4/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <div>

        @include('layout.navbar')
        @include('layout.menubar')

        <div class="hero mx-auto h-64" style="background-image: url(assets/banner/banner.jpg);">
            <div class="hero-overlay bg-opacity-20"></div>
            <div class="max-w-md  text-right">
                <h1 class="mb-5 text-4xl lg:text-5xl xl-text-6xl text-white font-bold">Leader</h1>
                <p class="mb-5 text-lg text-white flex items-center gap-3">


                    <a class="flex gap-3 items-center" href="/">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                            <style>
                                svg {
                                    fill: #f7f7f7
                                }
                            </style>
                            <path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                        </svg>

                        Home</a>
                    <a class="text-xl" href="#slide4">❯</a> Leader
                </p>

            </div>

        </div>


        <!-- <h1>{{$leader['name']}}</h1> -->
        <div class="hero m-10">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-lg-3">
                        <img src="{{ url($leader['image']) }}" class="w-100" alt="{{ $leader['name'] }}" />
                        <h2 class="text-2xl font-bold mt-3">
                            {{ $leader['name'] }}
                        </h2>
                        <p>{{ $leader['designation'] }}</p>
                    </div>
                    <div class="col-md-8 col-lg-9 mt-10">
                        <h2 class="text-2xl text-red-600 mb-3 font-bold">
                            BIOGRAPHY:
                        </h2>
                        @foreach($leader['description'] as $item)
                        <p class="mb-3">{{ $item['data'] }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        

    </div>



    <div class="drawer m-10">
            <input id="my-drawer" type="checkbox" class="drawer-toggle" />
            <div class="drawer-content">
                <!-- Page content here -->
                <label for="my-drawer" class="btn btn-primary drawer-button">Open drawer</label>
            </div>
            <div class="drawer-side">
                <label for="my-drawer" class="drawer-overlay"></label>
                <ul class="menu p-4 w-80 min-h-full bg-base-200 text-base-content">
                    <!-- Sidebar content here -->
                    <li><a>Sidebar Item 1</a></li>
                    <li><a>Sidebar Item 2</a></li>

                </ul>
            </div>
        </div>

</body>

</html>