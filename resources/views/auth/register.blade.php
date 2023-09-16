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
    @include('layout.menuItem')
    <!-- Register Page -->

    <div class="hero min-h-screen bg-base-200">


        <div class="hero-content flex-col lg:flex-row-reverse">
            <div class="text-center hidden lg:block lg:text-left">
                <h1 class="text-2xl font-bold"></h1>
                <img class="w-96" src="assets/auth/register.svg" alt="">
            </div>
            <form method="post" class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100">

                @csrf
                <div class="card-body">

                    <!-- <input type="text" name="name" placeholder="First name" class="input input-bordered" /> -->

                    <input type="text" name="name" placeholder="Your name" class="input input-bordered focus:border-red-500 rounded-none" required />

                    <!-- <span class="text-red-400 ">@error('name') {{$message}} @endError</span> -->

                    <input type="email" name="email" placeholder="Your E-mail" class="input input-bordered focus:border-red-500 rounded-none" required />
                    <!-- <span class="text-red-400 ">@error('email') {{$message}} @endError</span> -->
                    <input type="password" name="password" id="passwordInput" placeholder="Your password" class="input input-bordered focus:border-red-500 rounded-none" required />
                    <!-- <span class="text-red-400 ">@error('password') {{$message}} @endError</span> -->
                    <label for="showPassword" class="text-sm text-neutral-500">
                        <input type="checkbox" id="showPassword" onclick="togglePasswordVisibility()" />
                        Show Password
                    </label>
                    <div class="form-control mt-6">
                        <button class="btn rounded-none bg-red-600 hover:bg-red-700 text-white">Sighup</button>
                    </div>
                    <p>Already have an account ! <a class="text-red-600" href="{{url('/login')}}">Please Login</a></p>
                </div>
            </form>
        </div>
    </div>
    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById("passwordInput");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
            } else {
                passwordInput.type = "password";
            }
        }
    </script>







</body>

</html>