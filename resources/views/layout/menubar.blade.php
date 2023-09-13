<div class="navbar  md:hidden lg:flex bg-black text-white">
    <!-- <div class="navbar-start"></div> -->
    <div class="navbar-center  md:hidden  lg:block  xl:block xl:flex lg:flex">
        <ul class="menu menu-horizontal  items-center text-xl px-1 text-center"> <!-- Added the "text-center" class here -->

            <a class="{{ request()->routeIs('home') ? 'border-b-2 border-red-600 rounded-none pb-3 hover:text-red-600 hover:border-none' : 'mx-5 pb-3 hover:text-red-600 hover:font-semibold'}}" href="/">Home</a>

            <!-- <li> | </li> -->

            <a class="{{ request()->routeIs('about') ? 'border-b-2 border-red-600 rounded-none pb-3 hover:text-red-600 hover:border-none' : 'mx-5 pb-3 hover:text-red-600 hover:font-semibold'}}" href="/about">About</a>

            <!-- <li> | </li> -->

            <a class="{{ request()->routeIs('membership') ? 'border-b-2 border-red-600 rounded-none pb-3 hover:text-red-600 hover:border-none' : 'mx-5 pb-3 hover:text-red-600 hover:font-semibold'}}" href="/membership">Membership</a>

            <!-- <li> | </li> -->

            <a class="{{ request()->routeIs('black-belts') ? 'border-b-2 border-red-600 rounded-none pb-3 hover:text-red-600 hover:border-none' : 'mx-5 pb-3 hover:text-red-600 hover:font-semibold'}}" href="/black-belts">Black Belts</a>

            <!-- <li> | </li> -->

            <a class="{{ request()->routeIs('events') ? 'border-b-2 border-red-600 rounded-none pb-3 hover:text-red-600 hover:border-none' : 'mx-5 pb-3 hover:text-red-600 hover:font-semibold'}}" href="/events">Events</a>

            <!-- <li> | </li> -->

            <a class="{{ request()->routeIs('notice') ? 'border-b-2 border-red-600 rounded-none pb-3 hover:text-red-600 hover:border-none' : 'mx-5 pb-3 hover:text-red-600 hover:font-semibold'}}" href="/notice">Notice</a>

            <!-- <li> | </li> -->

            <a class="{{ request()->routeIs('contact') ? 'border-b-2 border-red-600 rounded-none pb-3 hover:text-red-600 hover:border-none' : 'mx-5 pb-3 hover:text-red-600 hover:font-semibold'}}" href="/contact">Contact</a>


        </ul>
    </div>
</div>