<x-app>

    
    @extends('partials.header')
    @section('content')
    <div class="w-full md:ps-80">
        <div class="flex justify-between md:justify-end items-center px-5 py-2 h-10 bg-primary gap-3">
            <div  class="md:hidden pt-2">
                <ion-icon name="menu" class="text-2xl cursor-pointer active:text-3xl" id="hamburger" ></ion-icon>
            </div>
            <div class="flex gap-2">
                <x-modals.notification></x-modals.notification>
                <a href="#"><ion-icon name="person-circle" class="text-2xl pt-2"></ion-icon></a>
            </div>
        </div>
    </div>

    @endsection

</x-app></div>