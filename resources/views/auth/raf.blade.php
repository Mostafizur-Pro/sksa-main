<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - SKSA</title>

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
        </ul>
    </div>
    <!-- Register Page -->

    <div class="hero min-h-screen bg-base-200">


        <div class="hero-content flex-col lg:flex-row-reverse">
            <div class="text-center lg:text-left">
                <h1 class="text-2xl font-bold"></h1>
                <img class="w-96" src="assets/auth/register.svg" alt="">
            </div>
            <form method="post" class="card flex-shrink-0 max-w-lg shadow-2xl bg-base-100">

                @csrf
                <div class="card-body">

                    <!-- <input type="text" name="name" placeholder="First name" class="input input-bordered" /> -->

                    <div class="flex gap-5">
                        <input type="text" name="name" placeholder="First name" class="input input-bordered" />
                        <input type="text" name="name" placeholder="Last name" class="input input-bordered" />
                    </div>


                    <select id="gender" name="gender" placeholder="Your gender" class="input input-bordered">
                        <!-- <option value="Male" hidden>Gender</option> -->
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>

                    <div class="flex gap-5">
                        <input type="text" name="birth" class="input input-bordered" placeholder="Date of Birth" />


                        <input type="text" name="number" class="input input-bordered" placeholder="Mobile Number" />
                    </div>

                    <div class="flex gap-5">

                        <input type="text" name="dojo" class="input input-bordered" placeholder="Dojo name" />
                        <input type="text" name="country" placeholder="Your Country" class="input input-bordered" />

                    </div>



                    <select id="gender" name="rank" placeholder="Your gender" class="input input-bordered">
                        <option value="Male" hidden>Select yoor Rank</option>
                        <option value="1st">1st Dan</option>
                        <option value="2nd">2nd Dan</option>
                        <option value="3rd">3rd Dan</option>
                        <option value="4th">4th Dan</option>
                        <option value="5th">5th Dan</option>
                        <option value="6th">6th Dan</option>
                        <option value="7th">7th Dan</option>
                        <option value="8th">8th Dan</option>
                        <option value="9th">9th Dan</option>
                        <option value="10th">10th Dan</option>
                    </select>



                    <!-- <span class="text-red-400 ">@error('name') {{$message}} @endError</span> -->

                    <input type="email" name="email" placeholder="Your E-mail" class="input input-bordered" />
                    <!-- <span class="text-red-400 ">@error('email') {{$message}} @endError</span> -->
                    <input type="password" name="password" placeholder="Your password" class="input input-bordered" />
                    <!-- <span class="text-red-400 ">@error('password') {{$message}} @endError</span> -->

                    <div class="form-control mt-6">
                        <button class="btn rounded-none bg-red-600 hover:bg-red-700 text-white">Sighup</button>
                    </div>
                    <p>Already have an account ! <a class="text-red-600" href="{{url('/login')}}">Please Login</a></p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>