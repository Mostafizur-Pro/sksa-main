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
            <a class="{{request()->routeIs('login') ? 'text-red-600 font-bold':'hover:text-red-600 hover:font-semibold'}}" href="/login">Login</a>
        </li>
       
    </ul>
</div>