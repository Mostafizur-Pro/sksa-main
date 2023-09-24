<div>
    <div class="carousel w-full mb-10">
        <div id="slide1" class="carousel-item relative w-full">
            <div class="hero mx-16">
                <div class="hero-content flex-col lg:flex-row-reverse">
                    <Image src="assets/logo/logo.png" class="rounded-lg w-1/4 lg:w-2/6 lg:mr-32" alt="motherboard" />
                    <div>
                        <p class="font-bold">Welcome to</p>
                        <h1 class="text-5xl font-bold">Shotokan Karate-Do Sports Association Bangladesh (SKSA)</h1>
                        <p class="py-6">
                            SKSA Bangladesh provides the best Shotokan Karate-Do practice to beginners and experts.
                        </p>
                        <a href="/about">
                            <button class="btn btn-red-200 bg-gradient-to-r from-black to-red-400 text-white">
                                ABOUT
                            </button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                <a href="#" class="btn bg-red-500 hover:bg-red-700 text-white btn-circle" onclick="prevSlide()">
                    ❮
                </a>
                <a href="#" class="btn bg-red-500 hover:bg-red-700 text-white btn-circle" onclick="nextSlide()">
                    ❯
                </a>
            </div>
        </div>
    </div>
    <div id="slide2" class="carousel-item relative w-full">
        <div class="hero mx-16">
            <div class="hero-content flex-col-reverse  lg:flex-row-reverse">
                <div>
                    <p class="font-bold">Honorable President of SKSA Bangladesh Shihan HMNC RANA </p>
                    <h1 class="text-5xl font-bold">International Karate Championship</h1>
                    <!-- <p class="py-6">
                        SKSA Bangladesh provides the best Shotokan Karate-Do practice to beginners and experts.
                    </p> -->
                    <a href="/about">
                        <button class="btn mt-10 btn-red-200 bg-gradient-to-r from-black to-red-400 text-white">
                            ABOUT
                        </button>
                    </a>
                </div>
                <Image src='assets/slide/slide2.jpg' class="rounded-lg lg:w-1/2 " alt="motherboard" />
            </div>
        </div>
        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
            <a href="#" class="btn bg-red-500 hover:bg-red-700 text-white btn-circle" onclick="prevSlide()">
                ❮
            </a>
            <a href="#" class="btn bg-red-500 hover:bg-red-700 text-white btn-circle" onclick="nextSlide()">
                ❯
            </a>
        </div>
    </div>
    <div id="slide3" class="carousel-item relative w-full">
        <div class="hero mx-16">
            <div class="hero-content flex-col lg:flex-row-reverse">
                <Image src='assets/slide/slide3.jpg' class="rounded-lg lg:w-1/2 " alt="motherboard" />
                <div>
                    <p class="font-bold">Organizer SKSA BANGLADESH</p>
                    <h1 class="text-5xl font-bold">
                    Historical moment always make You Proud
                    </h1>
                    <p class="py-6">
                        As a one of Joint Organizer SKSA BANGLADESH feel honored to be a part of Bangabandhu 1st Divisional Karate Club Championship 2022 on 17 March 2022 at Chapainawabganj, Rajshahi Division, Bangladesh.
                    </p>
                    <a href="/about">
                        <button class="btn btn-red-200 bg-gradient-to-r from-black to-red-400 text-white">
                            ABOUT
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
            <a href="#" class="btn bg-red-500 hover:bg-red-700 text-white btn-circle" onclick="prevSlide()">
                ❮
            </a>
            <a href="#" class="btn bg-red-500 hover:bg-red-700 text-white btn-circle" onclick="nextSlide()">
                ❯
            </a>
        </div>
    </div>
    <div id="slide4" class="carousel-item relative w-full">
        <div class="hero mx-16">
            <div class="hero-content flex-col-reverse lg:flex-row-reverse">
                <div>
                    <p class="font-bold text-2xl">17 JUNE 2023</p>
                    <h1 class="text-4xl font-bold">WORLD KARATE DAY</h1>

                    <a href="/about">
                        <button class="mt-20 btn btn-red-200 bg-gradient-to-r from-black to-red-400 text-white">
                            ABOUT
                        </button>
                    </a>
                </div>
                <Image src='assets/slide/slide4.jpg' class="rounded-lg lg:w-1/2 " alt="motherboard" />
            </div>
        </div>
        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
            <a href="#" class="btn bg-red-500 hover:bg-red-700 text-white btn-circle" onclick="prevSlide()">
                ❮
            </a>
            <a href="#" class="btn bg-red-500 hover:bg-red-700 text-white btn-circle" onclick="nextSlide()">
                ❯
            </a>
        </div>
    </div>
</div>
</div>




<script>
    let currentSlide = 1;
    const totalSlides = 4;
    // const slideInterval = 10000;

    function showSlide(slideNumber) {
        document.querySelectorAll('.carousel-item').forEach((slide) => {
            slide.style.display = 'none';
        });

        document.getElementById(`slide${slideNumber}`).style.display = 'block';

        currentSlide = slideNumber;
    }

    function nextSlide() {
        currentSlide = currentSlide % totalSlides + 1;
        showSlide(currentSlide);
    }

    function prevSlide() {
        currentSlide = currentSlide - 1 || totalSlides;
        showSlide(currentSlide);
    }

    function autoChange() {
        nextSlide();
        setTimeout(autoChange, slideInterval);
    }

    showSlide(currentSlide);
    setTimeout(autoChange, slideInterval);
</script>