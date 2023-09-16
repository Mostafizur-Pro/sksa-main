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


        @section('allPageBanner', 'Leader Profile')
        @include('components/banner/allPageBanner')




        <!-- <h1>{{$leader['name']}}</h1> -->
        <div class="">
            <div class="hero m-10 ">
                <div class="container">
                    <div class="">
                        <div class=" grid grid-cols-4 gap-5">
                            <div class="col-span-4 lg:col-span-3">
                                <img src="{{ url($leader['image']) }}" class="w-100 rounded-2xl" alt="{{ $leader['name'] }}" />
                                <h2 class="text-2xl font-bold mt-3">
                                    {{ $leader['name'] }}
                                </h2>
                                <p>{{ $leader['designation'] }}</p>
                            </div>

                            <div class="hidden lg:block lg:col-span-1 ">
                                <div class="dropdown dropdown-start">
                                    <label tabindex="0" class="btn m-1 text-red-600">Other's Leader Profile</label>
                                    <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                                        @foreach($leaders as $leaderList)
                                        @if($leader['id'] !== $leaderList["id"])
                                        <a href="{{route('leader-details',['id' => $leaderList['id']])}}">
                                            <div class="flex  p-2">
                                                <img src="{{ url($leaderList['image']) }}" class="w-10 rounded-full" alt="{{ $leaderList['name'] }}" />
                                                <div class="ml-2">
                                                    <h2 class="text-sm mt-2">
                                                        {{ $leaderList['name'] }}
                                                    </h2>
                                                    <!-- <p class="text-sm">{{ $leaderList['designation'] }}</p> -->
                                                </div>
                                            </div>
                                        </a>
                                        @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>



                        </div>


                        <div class=" mt-10">
                            <h2 class="text-2xl text-red-600 mb-3 font-bold">
                                BIOGRAPHY:
                            </h2>
                            @foreach($leader['description'] as $item)
                            <p class="mb-3 text-justify">{{ $item['data'] }}</p>
                            @endforeach
                        </div>
                        <a href="{{url('/membership')}}" >
                            <button class="btn bg-red-600 text-white hover:bg-red-700"><- Back to membership</button>
                        </a>
                    </div>
                </div>
            </div>





        </div>
    </div>




</body>

</html>