<div class="p-5 mt-5">
    <p class="text-2xl text-red-600 text-center sm:text-2xl md:text-2xl lg:text-2xl font-bold my-10">OUR LEADER</p>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 justify-center mx-auto gap-10 bg-base-200">
        <!-- Image Cards -->
        @foreach($leaders as $leader)
        <div class="card w-96 bg-base-100 shadow-xl">
            <figure>
                <img src="{{url($leader['image'])}}" alt="{{ $leader['name'] }}" />
            </figure>
            <div class="card-body">
                <h2 class="text-2xl font-bold">
                    {{ $leader['name'] }}
                </h2>
                <p>{{ $leader['designation'] }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>


<div class="p-5 mt-5 mx-10">
    <p class="text-2xl text-red-600 text-center sm:text-2xl md:text-2xl lg:text-2xl font-bold my-10">INTERNATIONAL REPRESENTATIVES</p>
    <!-- 01 -->
    <div class="collapse collapse-plus  border-x border-t border-red-500 rounded-none rounded-t-3xl">
        <input type="radio" name="my-accordion-3" checked="checked" />
        <div class="collapse-title text-xl  font-medium flex gap-2">

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 12" height="30" width="50">
                <path fill="#006a4e" d="M0 0h20v12H0z" />
                <circle cx="9" cy="6" r="4" fill="#f42a41" />
            </svg>

            <h3> Bangladesh</h3>
        </div>
        <div class="collapse-content">
            <p>hello Bangladesh</p>
        </div>
    </div>
    <!-- 02 -->
    <div class="collapse collapse-plus border-t border-x border-red-500 rounded-none">
        <input type="radio" name="my-accordion-3" />
        <div class="collapse-title text-xl  font-medium flex gap-2">

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 8" height="30" width="50">
                <path fill="#E30A17" d="M0 0h12v8H0z" />
                <circle cx="4.25" cy="4" r="2" fill="#fff" />
                <circle cx="4.75" cy="4" r="1.6" fill="#e30a17" />
                <path fill="#fff" d="M5.83334 4l1.80901 .58779-1.11804-1.53885v1.90212l1.11804-1.53885z" />
            </svg>
            <h3> Turkey</h3>
        </div>
        <div class="collapse-content">
            <p>hello Turkey</p>
        </div>
    </div>
    <!-- 03 -->
    <div class="collapse collapse-plus border-t border-x border-red-500 rounded-none">
        <input type="radio" name="my-accordion-3" />
        <div class="collapse-title text-xl  font-medium flex gap-2">

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 900 600" height="30" width="50">
                <rect fill="#fff" height="600" width="900" />
                <circle fill="#bc002d" cx="450" cy="300" r="180" />
            </svg>
            <h3> Japan</h3>
        </div>
        <div class="collapse-content">
            <p>hello Japan</p>
        </div>
    </div>
    <!-- 10 -->
    <div class="collapse collapse-plus border border-x border-t border-red-500 rounded-none rounded-b-3xl">
        <input type="radio" name="my-accordion-3" />
        <div class="collapse-title text-xl  font-medium flex gap-2">

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-17.582 -4.664 71.571 87.246" height="30" width="50">
                
                <use xlink:href="#b" stroke="#003893" stroke-width="5.1646754223" />
                <path id="b" d="M -15,37.5735931288 h 60 L -15,0 v 80 h 60 L -15,20 z" fill="#DC143C" />
                <circle r="12.8400974233" transform="translate(0,23.4834957055)" fill="#fff" />
            </svg>

            <h3> Nepal</h3>
        </div>
        <div class="collapse-content">
            <p>hello Nepal</p>
        </div>
    </div>
</div>