<div class="navbar bg-base-100">
    <div class="navbar-start">
        <div class="dropdown">
            <label tabindex="0" class="btn btn-ghost lg:hidden">
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
                    <a class="{{request()->routeIs('login') ? 'text-red-600 font-bold':'hover:text-red-600 hover:font-semibold'}}" href="/login">Login</a>
                </li>
            </ul>
        </div>
        <a href="/" class="flex items-center normal-case text-2xl">

            <img class='w-12' src="{{url('assets/logo/logo.png')}}" alt="image" />
            <h1 class="text-red-600 font-extrabold text-4xl">SKSA </h1>
        </a>
    </div>
    <div class="navbar-center hidden sm:hidden  md:hidden lg:block xl:block xl:flex lg:flex gap-10">
        <div class="flex items-center gap-3">
            <div class=" text-2xl">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                    <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96" fill="red" />
                </svg>
            </div>
            <div class="text-gray-600 text-sm">
                <p>Call Us</p>
                <h2 class=" font-semibold">01984-422786</h2>

            </div>
        </div>
        <div class="flex items-center gap-3">
            <div class=" text-2xl">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
                    <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" fill="red" />
                </svg>


            </div>
            <div class="text-gray-600 text-sm">
                <p>Alba Tower 2/6 (6th Floor)</p>
                <p>Pallabi, Mirpur, Dhaka-1216</p>
            </div>
        </div>
        <div class="flex items-center gap-3">
            <div class=" text-2xl">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                    <path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" fill="red" />
                </svg>


            </div>
            <div class="text-gray-600 text-sm">
                <p>E-mail</p>
                <h2 class="font-semibold"> sksabd2019@gmail.com</h2>
            </div>
        </div>

    </div>

    @if ($data)
    <div class="navbar-end hidden lg:block xl:block ml-10">

        <div class="dropdown dropdown-end">
            <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                <div class="w-10 rounded-full">
                    <img src="{{ $data->photo }}" />
                </div>
            </label>
            <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                <li>
                    <a href="/dashboard" class="justify-between">
                        Profile
                        <span class="badge">New</span>
                    </a>
                </li>
                <li><a>Settings</a></li>
                <li><a href="logout">Logout</a></li>
            </ul>
        </div>
    </div>
    @else

    <div class="navbar-end hidden lg:block xl:block ml-10">
        <a href="{{url('login')}}" class="btn rounded-none bg-red-600 hover:bg-red-700 font-bold text-white">START TODAY!</a>
    </div>
    @endif


</div>