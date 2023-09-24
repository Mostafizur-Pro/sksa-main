<footer class="footer m-5  ">


  <div class="text-center  ">


    <div class="flex justify-center mx-auto">
      <img src="{{url('assets/logo/logo.png')}}" class="w-20 md:w-24 lg:w-32 xl:w-40 rounded-lg items-center" />
    </div>
    <h1 class="text-red-600 text-lg md:text-xl lg:text-2xl xl:text-3xl font-bold">Shotokan Karate-Do Sports <br/> Association Bangladesh</h1>
  </div>


  <nav>
    <header class="footer-title">MENU</header>
    <a href="/about" class="link link-hover">About us</a>
    <a href="/contact" class="link link-hover">Contact</a>
    <a href="/events" class="link link-hover">Events</a>
    <a href="/notice" class="link link-hover">Notice</a>
  </nav>
  <nav>

    <header class="footer-title">Sign Up</header>

    <form id="dataForm" class=" lg:flex">
      <input type="email" id="email" placeholder="Enter your email" class="input input-bordered rounded-none " required />


      <button type="submit" id="storeEmail" class="btn bg-red-600 hover:bg-red-700  text-white rounded-none ">
        Subscribe
      </button>

    </form>
    <div class="text-3xl flex gap-2 mt-10 justify-center mx-auto">
      <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
        <path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z" fill="blue" />
      </svg>
      <a target="_blank" href="https://www.facebook.com/SKSABANGLADESH">
        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
          <path d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z" fill="blue" />
        </svg>
      </a>



    </div>

  </nav>




</footer>


<script>
  function saveDataToLocalStorage(key, value) {
    localStorage.setItem(key, value);
  }


  document.getElementById('dataForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const emailInput = document.getElementById('email');
    const email = emailInput.value;
    if (email) {

      saveDataToLocalStorage('email', email);
      emailInput.value = '';
      window.location.href = '/contact';
    }



  });
</script>