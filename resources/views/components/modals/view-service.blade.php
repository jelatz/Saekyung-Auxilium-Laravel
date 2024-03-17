<div x-data="{ isOpen: false }">
    <!-- Trigger Button -->
    <a href="#" @click="isOpen = true" class="hover:text-gray-600 text-lg"><ion-icon name="eye"></ion-icon></a>

    <!-- Modal -->
    <div x-show="isOpen" class="fixed inset-0 overflow-y-auto flex items-center justify-center z-50">
        <div class="relative mx-auto max-w-lg w-100 bg-primary rounded-lg shadow-lg" @click.away="isOpen = false">
            <!-- Modal Header -->
            <div class="flex justify-between items-center px-6 py-4 bg-primary rounded-lg border-b-2">
                <h2 class="text-lg font-semibold">Reset your password</h2>
                <button @click="isOpen = false" class="text-gray-600 hover:text-gray-800">&times;</button>
            </div>
            <!-- Modal Body -->
            <form action="#" method="#">
                @csrf
            <div class="px-6 py-3">
                    <div class="mb-3">
                        <label for="email" class="text-lg">Email Address:</label>
                        <input type="email" name="email" id="email" class="block w-full rounded-lg ps-2 bg-gray-50 h-10 mt-3">
                    </div>
                </div>
                <!-- Modal Footer -->
                <div class="px-6 py-3 bg-primary text-center rounded-lg">
                    <button @click="isOpen = false" class="px-5 py-2 bg-btn text-white hover:bg-secondary hover:text-black rounded-lg">Reset Password</button>
                </div>
            </form>
        </div>
    </div>
</div>