@extends('layouts.app')

@section('content')

<div class="bg-index bg-no-repeat bg-center bg-cover min-h-screen grid place-items-center">
    <div class="container mx-auto bg-primary w-80 pb-5 px-3 rounded-md sm:w-96 sm:px-5 sm:py-5">
        <h2 class="text-3xl text-center font-semibold my-5">Login</h2>
        <form action="#" method="POST">
            @csrf
            <div class="mb-3">
                <label for="username" class="text-lg">Username: </label>
                <input type="text" name="username" id="username" class="block w-full my-1 rounded-md h-8 ps-2" required>
            </div>
            <div class="mb-3">
                <label for="password" class="text-lg">Password: </label>
                <input type="password" name="passowrd" id="password" class="block w-full my-1 rounded-md h-8 ps-2" required>
            </div>
            <div class="mb-3">
                <input type="checkbox" name="remember" id="remember" class="mr-2">
                <label for="remember" class="text-lg">Remember me</label>
            </div>
            <div class="mb-3">
                {{-- <a href="#" @click="isOpen = ! open" class="text-black hover:text-gray-600 text-lg">Forgot your password?</a> --}}
                <x-modal></x-modal>
            </div>
            <div class="mt-10 text-center">
                <input type="submit" value="Submit" class="bg-btn text-white hover:bg-secondary hover:text-black px-5 text-md font-semibold py-2 rounded-xl cursor-pointer ">
            </div>
        </form>
    </div>
</div>



@endsection