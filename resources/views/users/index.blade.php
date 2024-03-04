@include('includes.head')
<div class="container-xl h-screen grid place-items-center bg-login-page bg-no-repeat bg-center bg-cover">
    <div class="bg-secondary p-7 rounded-md">
        <h1 class="font-bold text-center mb-10 text-3xl text-red-700">Saekyung 956</h1>
        <form action="" method="POST">
            <div class="mb-6">
                <label for="username" class="text-lg mb-2 inline-block">Username:</label>
                <input type="text" name="username" class="border border-gray-200 rounded-md p-2 w-full">
            </div>
            <div class="mb-6">
                <label for="password" class="text-lg mb-2 inline-block">Password:</label>
                <input type="password" name="password" class="border border-gray-200 rounded-md p-2 w-full">
            </div>
            <div class="mb-6">
                <label for="remember" class="inline-block">
                    <input type="checkbox" name="remember" class="mr-2">
                    Remember Me
                </label>
            </div>
            <div class="text-center">
                <button type="submit" class="border border-gray-900 px-5 py-1 text-gray-950 rounded-md hover:bg-primary">Login</button>
            </div>
        </form>
    </div>
    <div class="container-xl absolute bottom-2">
        <h1 class="text-white"><i class="fa fa-copyright" aria-hidden="true"></i>  JLL Company</h1>
    </div>
</div>
