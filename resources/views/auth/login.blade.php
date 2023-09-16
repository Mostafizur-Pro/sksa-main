<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SKSA</title>

    <!-- Tailwind CSS & Daisy ui -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.6.4/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <!-- Navber -->
    <div class="dropdown  absolute">
        <label tabindex="0" class="btn btn-ghost">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
            </svg>
        </label>
        <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
            <li>
                <a class="{{request()->routeIs('home') ? 'text-red-600 font-bold':'hover:text-red-600 hover:font-semibold'}}" href="/">Home</a>
            </li>

            <li>
                <a class="{{request()->routeIs('about') ? 'text-red-600 font-bold':'hover:text-red-600 hover:font-semibold'}}" href="/about">About</a>
            </li>

            <li>
                <a class="{{request()->routeIs('membership') ? 'text-red-600 font-bold':'hover:text-red-600 hover:font-semibold'}}" href="/membership">Membership</a>
            </li>

            <li>
                <a class="{{request()->routeIs('black-belts') ? 'text-red-600 font-bold':'hover:text-red-600 hover:font-semibold'}}" href="/black-belts">Black Belts</a>
            </li>

            <li>
                <a class="{{request()->routeIs('events') ? 'text-red-600 font-bold':'hover:text-red-600 hover:font-semibold'}}" href="/events">Events</a>
            </li>

            <li>
                <a class="{{request()->routeIs('notice') ? 'text-red-600 font-bold':'hover:text-red-600 hover:font-semibold'}}" href="/notice">Notice</a>
            </li>

            <li>
                <a class="{{request()->routeIs('contact') ? 'text-red-600 font-bold':'hover:text-red-600 hover:font-semibold'}}" href="/contact">Contact</a>
            </li>
            <li>
                <a class="{{request()->routeIs('register') ? 'text-red-600 font-bold':'hover:text-red-600 hover:font-semibold'}}" href="/register">Register</a>
            </li>
        </ul>
    </div>
    <!-- Register Page -->

    <div class="hero min-h-screen bg-base-200">

        <div class="hero-content flex-col lg:flex-row-reverse">
            <div class="text-center hidden lg:block  lg:text-left">
                <h1 class="text-2xl font-bold"></h1>
                <img class="w-96" src="assets/auth/login.svg" alt="">
            </div>
            <form method="post" class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100">


                @csrf
                <div class="card-body">
                    <input type="email" name="email" placeholder="Your E-mail" class="input input-bordered focus:border-red-500 rounded-none" required/>
                    <!-- <span class="text-red-400 ">@error('email') {{$message}} @endError</span> -->
                    <input type="password" name="password" placeholder="Your password" class="input input-bordered focus:border-red-500 rounded-none"  required/>
                    <!-- <span class="text-red-400 ">@error('password') {{$message}} @endError</span> -->

                    <label class="label">
                        <a href="{{url('/forget-password')}}" class="label-text-alt link link-hover">Forgot password?</a>
                    </label>

                    <div class="form-control mt-6">
                        <button class="btn rounded-none bg-red-600 text-white hover:bg-red-700">Login</button>
                    </div>
                    <p>Create new Account! <a class="text-red-600" href="{{url('/register')}}">Please Register</a></p>
                </div>
            </form>
        </div>
    </div>

</body>

</html>