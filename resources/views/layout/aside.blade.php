  <!-- Sidebar -->

  <aside class="bg-gray-700 text-white h-screen pl-5 min-w-1/4  fixed overflow-y-auto">
    <!-- Logo -->
    <div class="flex items-center justify-center h-16">
      <!-- <img src="logo.png" alt="Dashboard Logo" class="w-10 h-10"> -->
      <a href="{{url('/')}}" class="btn btn-ghost normal-case text-xl">
        <img class='w-20' src="{{url('assets/logo/logo.png')}}" alt="image" />
        <h1 class="text-4xl text-red-600 font-bold hidden lg:block"> SKSA</h1>
      </a>
      <!-- <span class="text-xl font-semibold ml-2">Dashboard</span> -->
    </div>

    <div class="mt-10  font-bold">
      <p>MENU</p>
    </div>
    <!-- Sidebar Links -->
    <nav>
      <ul class="mt-5 lg:ml-5">
        <li class="mb-4">
          <a href="{{url('/dashboard')}}" class="flex items-center ">
            <svg class="w-5 h-5 mr-2 lg:block" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
              <style>
                svg {
                  fill: #ffffff
                }
              </style>
              <path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z" />
            </svg>
            <span class="hidden sm:inline">Profile</span>
          </a>
        </li>
        @if($data->role == 'admin')
        <li class="mb-4">
          <a href="{{url('/allUser')}}" class="flex items-center ">
            <svg class="w-5 h-5 mr-2 lg:block" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M9 5l7 7-7 7"></path>
            </svg>
            <span class="hidden sm:inline">All User</span>

          </a>
        </li>
        @endif

        <!-- <li>
          <a class="flex items-center ">
            <svg class="w-5 h-5 mr-2 lg:block" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
            </svg>
            <span class="hidden sm:inline mr-5"></span>
          </a>
          <ul>
            <li>About</li>
          </ul>
        </li> -->


      </ul>
    </nav>

    <div class="mt-10  font-bold">
      <p>PAGE</p>
    </div>
    <nav>
      <ul class="mt-5 lg:ml-5">
        <li class="mb-4">
          <a href="{{url('/about')}}" class="flex items-center ">
            <svg class="w-5 h-5 mr-2 lg:block" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
              <style>
                svg {
                  fill: #fcfcfc
                }
              </style>
              <path d="M512 80c8.8 0 16 7.2 16 16V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V96c0-8.8 7.2-16 16-16H512zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM208 256a64 64 0 1 0 0-128 64 64 0 1 0 0 128zm-32 32c-44.2 0-80 35.8-80 80c0 8.8 7.2 16 16 16H304c8.8 0 16-7.2 16-16c0-44.2-35.8-80-80-80H176zM376 144c-13.3 0-24 10.7-24 24s10.7 24 24 24h80c13.3 0 24-10.7 24-24s-10.7-24-24-24H376zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24h80c13.3 0 24-10.7 24-24s-10.7-24-24-24H376z" />
            </svg>
            <span class="hidden sm:inline">About</span>
          </a>
        </li>
        <li class="mb-4">
          <a href="{{url('/membership')}}" class="flex items-center ">
            <svg class="w-5 h-5 mr-2 lg:block" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">


              <style>
                svg {
                  fill: #ffffff
                }
              </style>
              <path d="M364.2 83.8c-24.4-24.4-64-24.4-88.4 0l-184 184c-42.1 42.1-42.1 110.3 0 152.4s110.3 42.1 152.4 0l152-152c10.9-10.9 28.7-10.9 39.6 0s10.9 28.7 0 39.6l-152 152c-64 64-167.6 64-231.6 0s-64-167.6 0-231.6l184-184c46.3-46.3 121.3-46.3 167.6 0s46.3 121.3 0 167.6l-176 176c-28.6 28.6-75 28.6-103.6 0s-28.6-75 0-103.6l144-144c10.9-10.9 28.7-10.9 39.6 0s10.9 28.7 0 39.6l-144 144c-6.7 6.7-6.7 17.7 0 24.4s17.7 6.7 24.4 0l176-176c24.4-24.4 24.4-64 0-88.4z" />
            </svg>
            <span class="hidden sm:inline">Membership</span>
          </a>
        </li>
        <li class="mb-4">
          <a href="{{url('/black-belts')}}" class="flex items-center ">
            <svg class="w-5 h-5 mr-2 lg:block" xmlns="http://www.w3.org/2000/svg" width="800px" height="800px" viewBox="0 0 512 512">
              <style>
                svg {
                  fill: #ffffff
                }
              </style>
              <path d="M255.233 61.009c-64.986-.549-141.156 21.77-232.77 86.17-2.124 1.136-2.856 1.77-3.663 2.576-.33 22.087.053 44.195.169 66.287 41.134 25.308 100.629 45.815 141.87 55.242-40.006 54.984-65.757 112.762-84.793 169.274l-1.916 5.685 49.586 43.473 5.185-10.524c29.919-60.708 55.189-122.456 94.832-179.1 7.43 6.226 16.197 11.95 27.217 11.128 5.455-.407 9.59-2.521 12.97-5.264l3.835.158c11.196.46 22.125-.34 32.049-3.79a49.45 49.45 0 0 0 8.133-3.678c42.982 51.203 65.056 121.754 80.294 177.52L392.286 491l57.81-57.041-2.197-5.54c-18.928-47.699-37.653-110.49-75.439-159.839 40.2-10.794 76.734-27.318 108.326-48.125 10.64-7.01 5.245-3.447 12.545-8.617l-1.523-61.74c-4.272-2.654-6.305-3.658-10.121-5.711-51.467-27.684-109.288-67.177-183.198-79.582a274.737 274.737 0 0 0-43.256-3.797zm-.246 17.928c14.062.15 27.542 1.442 40.524 3.62 67.167 11.274 121.501 46.976 172.842 75.005a503.254 503.254 0 0 1-29.192 14.488c-47.152-28.78-98.154-53.407-155.365-61.158-65.292-8.846-138.118 4.926-220.31 58.205a543.237 543.237 0 0 1-23.938-11.77c86.261-59.175 156.057-79.026 215.44-78.39zm-7.904 47.414c11.676.03 23.1.861 34.297 2.379 49.283 6.676 94.541 27.006 137.357 52.07-32.065 12.873-64.881 21.975-98.205 27.137-11.926-13.686-29.01-19.083-45.847-21.202l-6.223-.783-2.678 5.158c-4.595-1.936-9.467-3.954-13.637-5.341-4.337-1.431-8.07-2.662-12.86-2.489-20.419.738-33.221 9.61-39.604 18.715a39.044 39.044 0 0 0-3.79 6.768c-37.4-5.266-75.052-15.524-112.64-31.02 60.545-37.301 114.452-51.519 163.83-51.392zm227.695 47.941l.412 28.092c-32.966 22.502-72.037 40.144-115.548 50.844-8.333-9.135-17.5-17.615-27.637-25.235a61.999 61.999 0 0 0-1.51-3.892c49.566-8.454 97.963-25.23 144.283-49.809zM37.28 176.136c51.963 26.354 104.52 42.826 156.705 50.045.378.937.805 1.83 1.278 2.685a523.56 523.56 0 0 0-22.407 26.557c-43.916-9.01-89.474-24.845-135.705-48.79zm202.655 25.133c6.402.16 12.565 3.704 18.41 6.23-5.139 13.292-8.162 26.81-8.768 40.436l-.197-.114c-10.532-6.134-20.484-12.486-27.77-18.084-6.358-4.884-9.695-9.368-10.482-10.23 4.78-15.415 20.1-18.32 28.807-18.238zm38.837 4.468c13.956 2.53 24.72 7.36 31.807 18.955 5.731 9.378 7.181 16.926 6.49 24.577-.69 7.65-3.859 15.669-8.695 24.521-3.136 5.741-7.719 9.18-14.48 11.531-5.384 1.872-12.125 2.76-19.575 2.858-10.934-27.996-8.57-54.647 4.453-82.442zm-70.921 36.123c8.06 6.246 17.296 12.368 24.832 16.97-52.939 63.648-82.216 134.28-114.86 201.782l-22.718-19.92c23.312-67.678 56.371-135.958 112.746-198.832zm126.796 11.948c49.11 45.588 71.791 117.736 94.38 175.654l-27.58 27.215c-15.266-53.999-37.48-119.539-80.067-169.881a39.932 39.932 0 0 0 2.789-4.377c4.943-9.049 9.026-18.417 10.478-28.611zm-86.236 14.187c.743.416 1.478.812 2.219 1.223.946 6.517 2.485 13.044 4.633 19.568-3.104 2.783-6.077 4.514-5.65 4.483-1.92.143-8.738-3.091-15.14-7.893a436.419 436.419 0 0 1 13.938-17.38z" />
            </svg>
            <span class="hidden sm:inline">Black Belts</span>
          </a>
        </li>
        <li class="mb-4">
          <a href="{{url('/contact')}}" class="flex items-center ">
            <svg class="w-5 h-5 mr-2 lg:block" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
              <style>
                svg {
                  fill: #ffffff
                }
              </style>
              <path d="M384 48c8.8 0 16 7.2 16 16V448c0 8.8-7.2 16-16 16H96c-8.8 0-16-7.2-16-16V64c0-8.8 7.2-16 16-16H384zM96 0C60.7 0 32 28.7 32 64V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H96zM240 256a64 64 0 1 0 0-128 64 64 0 1 0 0 128zm-32 32c-44.2 0-80 35.8-80 80c0 8.8 7.2 16 16 16H336c8.8 0 16-7.2 16-16c0-44.2-35.8-80-80-80H208zM512 80c0-8.8-7.2-16-16-16s-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V80zM496 192c-8.8 0-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm16 144c0-8.8-7.2-16-16-16s-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V336z" />
            </svg>
            <span class="hidden sm:inline">Contact</span>
          </a>
        </li>

        <!-- 
        <li>
          <a class="flex items-center ">
            <svg class="w-5 h-5 mr-2 lg:block" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
            </svg>
            <span class="hidden sm:inline mr-5"></span>
          </a>
          <ul>
            <li>About</li>
          </ul>
        </li> -->


      </ul>
    </nav>





  </aside>