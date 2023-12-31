<div class="navbar hidden sm:hidden  md:hidden lg:flex bg-black text-white">
    <!-- <div class="navbar-start"></div> -->
    <div class="navbar-center hidden sm:hidden  md:hidden  lg:block  xl:block xl:flex lg:flex">
        <ul class="menu menu-horizontal  items-center text-xl px-1 text-center"> <!-- Added the "text-center" class here -->

            <a class="{{ request()->routeIs('home') ? 'border-b-2 border-red-600 rounded-none  hover:text-red-600 hover:border-none' : 'ml-5  hover:text-red-600 hover:font-semibold'}}" href="/">Home</a>

            <!-- <li> | </li> -->

            <a class="{{ request()->routeIs('about') ? 'border-b-2 border-red-600 rounded-none  hover:text-red-600 hover:border-none' : 'ml-5  hover:text-red-600 hover:font-semibold'}}" href="/about">About</a>

            <!-- <li> | </li> -->

            <a class="{{ request()->routeIs('membership') ? 'border-b-2 border-red-600 rounded-none  hover:text-red-600 hover:border-none' : 'ml-5  hover:text-red-600 hover:font-semibold'}}" href="/membership">Membership</a>




            <a class="ml-2 hover:text-red-600 hover:font-semibold">
                <div class="dropdown dropdown-hover">
                    <label tabindex="0" class=" top-0">Government Council</label>
                    <ul tabindex="0" class="dropdown-content  z-[1] menu bg-black text-white  text-xl">
                        <li><a href="/bangladesh" class="hover:text-red-600">Bangladesh</a></li>
                        <li><a href="/international" class="hover:text-red-600">International</a></li>
                    </ul>
                </div>
            </a>



            <!-- <li> | </li> -->

            <a class="{{ request()->routeIs('black-belts') ? 'border-b-2 border-red-600 rounded-none  hover:text-red-600 hover:border-none' : 'ml-5  hover:text-red-600 hover:font-semibold'}}" href="/black-belts">Black Belts</a>

            <!-- <li> | </li> -->

            <a class="{{ request()->routeIs('events') ? 'border-b-2 border-red-600 rounded-none  hover:text-red-600 hover:border-none' : 'ml-5  hover:text-red-600 hover:font-semibold'}}" href="/events">Events</a>

            <!-- <li> | </li> -->

            <a class="{{ request()->routeIs('notice') ? 'border-b-2 border-red-600 rounded-none  hover:text-red-600 hover:border-none' : 'ml-5  hover:text-red-600 hover:font-semibold'}}" href="/notice">Notice</a>

            <!-- <li> | </li> -->

            <a class="{{ request()->routeIs('contact') ? 'border-b-2 border-red-600 rounded-none  hover:text-red-600 hover:border-none' : 'ml-5  hover:text-red-600 hover:font-semibold'}}" href="/contact">Contact</a>
            <!-- @if ($data)

            <a class="{{ request()->routeIs('dashboard') ? 'border-b-2 border-red-600 rounded-none  hover:text-red-600 hover:border-none' : 'ml-5  hover:text-red-600 hover:font-semibold'}}" href="/dashboard">Dashboard</a>
            @endif -->




        </ul>
    </div>
</div>