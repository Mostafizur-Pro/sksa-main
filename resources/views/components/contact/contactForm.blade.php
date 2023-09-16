<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 justify-between mx-auto gap-10">
    <!-- Card 1 -->

    <form class="card card-compact hover:bg-white m-10 pt-20 w-full md:w-4/6 mx-auto rounded-none shadow-lg" method="POST">
        <h2 class="text-3xl font-bold">CONTACT INFO</h2>
        <div class='grid grid-cols-2 gap-5 mt-5'>
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-semibold ">Your Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required class="w-full px-3 py-2 border  focus:outline-none focus:border-red-500 rounded-none">
            </div>
            <div class="mb-4">
                <label for="phone" class="block text-gray-700 font-semibold ">Your Phone</label>
                <input type="tel" id="phone" name="phone" placeholder="Phone number" class="w-full px-3 py-2 border  focus:outline-none focus:border-red-500 rounded-none">
            </div>
        </div>
        <div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-semibold ">Your Email *</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required class="w-full px-3 py-2 border  focus:outline-none focus:border-red-500 rounded-none">
            </div>

            <div class="mb-4">
                <label for="patient_info" class="block text-gray-700 font-semibold ">Tell us
                </label>
                <textarea id="patient_info" name="patient_info" placeholder="Tell us" rows="4" class="w-full px-3 py-2 border focus:outline-none focus:border-red-500 rounded-none"></textarea>
            </div>

        </div>


        <button type="submit" class="bg-red-600 rounded-none hover:bg-red-700 text-white font-semibold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
            SEND NOW
        </button>
    </form>




    <!-- Card 2 -->
    <div class="card card-compact m-10  hover:bg-white pt-20">

        <div class=" text-left ">

            <h2 class="text-3xl font-bold">CONTACT INFO</h2>
            <div class="mt-5 font-semibold text-lg flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                    <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96" fill="red" />
                </svg>
                <p>
                    01984-422786
                </p>
            </div>
            <div class="mt-3 font-semibold text-lg flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                    <path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" fill="red" />
                </svg>
                <p>
                    sksabd2019@gmail.com
                </p>
            </div>
            <div class="mt-3 font-semibold text-lg flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                    <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" fill="red" />
                </svg>
                <p>Alba Tower 2/6 (6th Floor) Pallabi, Mirpur, Dhaka-1216</p>
            </div>



        </div>
    </div>
</div>


</div>


<script>
    for (let i = 0; i < localStorage.length; i++) {
        const key = localStorage.key(i);
        const value = localStorage.getItem(key);

        if (key === 'email') {
            const emailInput = document.getElementById('email');
            emailInput.value = value;
        }

    }
</script>