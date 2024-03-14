<x-app>

    @section('title', 'Saekyung Auxilium Dashboard')
    @extends('partials.header')
    @section('content')
    <div class="w-full md:ps-64">
        <div class="flex justify-between md:justify-end items-center px-5 py-2 h-15 bg-primary gap-3">
            <div  class="md:hidden pt-2">
                <ion-icon name="menu" class="text-3xl cursor-pointer active:text-3xl" id="hamburger" ></ion-icon>
            </div>
            <div class="flex gap-2">
                <x-modals.notification></x-modals.notification>
                <a href="#"><ion-icon name="person-circle" class="text-3xl pt-2"></ion-icon></a>
            </div>
        </div>

        <div class="w-full bg-resident bg-no-repeat bg-center bg-cover min-h-screen relative p-5">
            {{-- <div class="absolute top-0 left-0 w-full h-full bg-gray-900 opacity-50"></div> --}}
            <h1 class="text-2xl text-white font-semibold">Welcome User!</h1>
            <div class="container mt-5 mx-auto rounded-lg bg-primary p-5">
                <h1 class="text-lg font-semibold text-black text-center mb-10">Types of Services</h1>
                <div class="container mx-auto flex justify-center gap-5 md:gap-10 md:justify-evenly flex-wrap">
                    <a href="">
                        <x-card>
                            <img src="{{asset('images/services/electrical.png')}}" alt="electrical" class="w-32">
                            <p class="text-center mt-5">Report poor circuit protection,  grounding issues, not working switches of light  or any other electrical problems </p>
                        </x-card>
                    </a>
                    <a href="">
                        <x-card>
                            <img src="{{asset('images/services/Furniture.png')}}" alt="furniture" class="w-32">
                            <p class="text-center mt-5">Report poor circuit protection,  grounding issues, not working switches of light  or any other electrical problems </p>
                        </x-card>
                    </a>
                    <a href="">
                        <x-card>
                            <img src="{{asset('images/services/Plumbing.png')}}" alt="plumbing" class="w-32">
                            <p class="text-center mt-5">Report poor circuit protection,  grounding issues, not working switches of light  or any other electrical problems </p>
                        </x-card>
                    </a>
                    <a href="">
                        <x-card>
                            <img src="{{asset('images/services/Security.png')}}" alt="security" class="w-32">
                            <p class="text-center mt-5">Report poor circuit protection,  grounding issues, not working switches of light  or any other electrical problems </p>
                        </x-card>
                    </a>
                    <a href="">
                        <x-card>
                            <img src="{{asset('images/services/Tile.png')}}" alt="Tile" class="w-32">
                            <p class="text-center mt-5">Report poor circuit protection,  grounding issues, not working switches of light  or any other electrical problems </p>
                        </x-card>
                    </a>
                    <a href="">
                        <x-card>
                            <img src="{{asset('images/services/painting.png')}}" alt="Painting" class="w-32">
                            <p class="text-center mt-5">Report poor circuit protection,  grounding issues, not working switches of light  or any other electrical problems </p>
                        </x-card>
                    </a>
                    <a href="">
                        <x-card>
                            <img src="{{asset('images/services/Others.png')}}" alt="others" class="w-32">
                            <p class="text-center mt-5">Report poor circuit protection,  grounding issues, not working switches of light  or any other electrical problems </p>
                        </x-card>
                        </a>
                    </div>
            </div>
        </div>
    </div>

    @endsection

</x-app></div>