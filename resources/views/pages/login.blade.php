@include('includes.head')
<div class="h-screen w-full bg-index bg-no-repeat bg-center bg-fill grid place-items-center">
    <div class="rounded-lg bg-primary p-8 flex justify-center flex-col items-center">
        <h1 class="text-4xl font-bold my-5">Saekyung Auxilium</h1>
        <form action="#" method="POST" class="w-full">
            @csrf
            <div class="mb-3">
                <label for="username">Username: </label>
                <input type="text" name="username" id="username" class="block my-3 w-full h-8 rounded-lg ps-10">
            </div>
            <div class="mb-3">
                <label for="password">Password: </label>
                <input type="password" name="password" id="password" class="block my-3 w-full h-8 rounded-lg ps-10">
            </div>
            <div class="mb-3">
                <x-checkbox id='remember' />
                <label for="remember">Remember me</label>
            </div>
            <div class="mb-3">
                <a href="#" class="hover:text-red-500">Forgot Password?</a>
            </div>
            <div class="mt-5 text-center">
                <x-primary-btn class="text-white w-32 hover:bg-gray-600">Login</x-primary-btn>
            </div>
            <div class="mt-5 text-center">
                <a href="{{route('admin-login')}}" class="cursor-pointer hover:text-red-500">Login as Admin?</a>
            </div>
        </form>
    </div>
</div>