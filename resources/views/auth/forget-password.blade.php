<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password - SKSA</title>

    <!-- Tailwind CSS & Daisy ui -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.6.4/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <!-- Navbar (You can include the same navigation bar as your login page) -->
    @include('layout.menuItem')
    <!-- Navber -->
    <div class="dropdown  absolute">
        <!-- Your navigation code here -->
    </div>

    <!-- Forgot Password Page -->
    <div class="hero min-h-screen bg-base-200">

        <div class="hero-content flex-col lg:flex-row-reverse">
            <div class="text-center hidden lg:block  lg:text-left">
                <h1 class="text-2xl font-bold"></h1>
                <img class="w-96" src="assets/auth/forgot-password.svg" alt="">
            </div>
            <form method="post" class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100">

                @csrf
                <div class="card-body">
                    <p class="text-neutral-600 text-center">Forgot your password? Don't worry, we've got you covered.</p>
                    <input type="email" name="email" placeholder="Your E-mail" class="input input-bordered focus:border-red-500 rounded-none" required/>
                    
                    <div class="form-control mt-6">
                        <button class="btn rounded-none bg-red-600 text-white hover:bg-red-700">Reset Password</button>
                    </div>
                    <p>Remember your password? <a class="text-red-600" href="{{url('/login')}}">Log in here</a></p>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
