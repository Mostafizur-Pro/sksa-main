  <!-- Sidebar -->
  <aside class="bg-gray-700 text-white h-screen pl-5 min-w-1/4  fixed overflow-y-auto">
    <!-- Logo -->
    <div class="flex items-center justify-center h-16">
      <!-- <img src="logo.png" alt="Dashboard Logo" class="w-10 h-10"> -->
      <a href="{{url('/')}}" class="btn btn-ghost normal-case text-xl">
        <img class='w-20' src="{{url('assets/logo/logo.png')}}" alt="image" />
      <h1 class="text-4xl text-red-600 font-bold hidden lg:block">  SKSA</h1>
      </a>
      <!-- <span class="text-xl font-semibold ml-2">Dashboard</span> -->
    </div>

    <!-- Sidebar Links -->
    <nav>
  <ul class="mt-10">
    <li class="mb-4">
      <a href="{{url('/dashboard')}}" class="flex items-center ">
        <svg class="w-5 h-5 mr-2 lg:block" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
        <span class="hidden sm:inline">Profile</span>
      </a>
    </li>
    <li class="mb-4">
      <a href="{{url('/allUser')}}" class="flex items-center ">
        <svg class="w-5 h-5 mr-2 lg:block" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M9 5l7 7-7 7"></path>
        </svg>
        <span class="hidden sm:inline">All User</span>
      </a>
    </li>
    <!-- <li class="mb-4">
      <a href="{{url('/add-product')}}" class="flex items-center ">
        <svg class="w-5 h-5 mr-2 lg:block" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
        </svg>
        <span class="hidden sm:inline">Add Products</span>
      </a>
    </li>
    <li class="mb-4">
      <a href="{{url('/all-products')}}" class="flex items-center ">
        <svg class="w-5 h-5 mr-2 lg:block" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
        </svg>
        <span class="hidden sm:inline">All Products</span>
      </a>
    </li> -->
  
    <!-- Add more links here -->
  </ul>
</nav>

  </aside>