<div class="w-64 md:w-68 h-screen bg-primary fixed left-0 top-10 md:top-0 hidden md:block sidebar-menu">
    <div class="flex flex-col justify-center items-center py-2 gap-10">
        <figure>
            <a href="{{route('dashboard')}}">
                <img src="{{asset('images/logo-final.png')}}" alt="Saekyung Auxilium Logo" class="w-44">
            </a>
        </figure>
        <ul class="flex flex-col justify-center items-center w-full text-center border-0">
            <li class="py-5 w-full border-0 @if(request()->routeIs('dashboard')) bg-secondary @endif">
                <a href="{{route('dashboard')}}" class="no-underline border-0">Dashboard</a>
            </li>
            <li class="py-5 w-full border-0 @if(request()->routeIs('services')) bg-secondary @endif">
                <a href="{{route('services')}}" class="no-underline border-0">Services</a>
            </li>
            <li class="py-5 w-full border-0 @if(request()->routeIs('history')) bg-secondary @endif">
                <a href="{{route('history')}}" class="no-underline border-0">History</a>
            </li>
        </ul>
    </div>
</div>
        </ul>
    </div>
</div>