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
            <div class="container mx-auto">
                <h1 class="text-2xl text-white font-semibold">Welcome User!</h1>
                <div class="container mx-auto my-10 flex justify-around">
                    <x-card class="text-start w-full md:w-80 items-start">
                        <h5 class="text-white text-lg">Total Service Request</h5>
                        <p class="text-white">20</p>
                    </x-card>
                    <x-card class="text-start w-full md:w-80 items-start">
                        <h5 class="text-white text-lg">Pending Requests</h5>
                        <p class="text-white">20</p>
                    </x-card>
                    <x-card class="text-start w-full md:w-80 items-start">
                        <h5 class="text-white text-lg">On-hold Requests</h5>
                        <p class="text-white">20</p>
                    </x-card>
                </div>
                <div class="block container mx-auto">
                    <table class="border border-collapse border-sky-100 w-full">
                        <thead>
                            <tr class="h-10">
                                <th class="text-white">Request ID</th>
                                <th class="text-white">Date Filed</th>
                                <th class="text-white">Service Type</th>
                                <th class="text-white">Status</th>
                                <th class="text-white">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-white text-center">123123</td>
                                <td class="text-white text-center">09/24/2023</td>
                                <td class="text-white text-center">Electrical</td>
                                <td class="text-white text-center">Active</td>
                                <td class="text-white text-center flex items-center justify-center gap-2">
                                    <x-modals.view-service></x-modals.view-service>
                                    <x-modals.edit-service></x-modals.edit-service>
                                    <x-modals.delete-service></x-modals.delete-service>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    @endsection

</x-app></div>