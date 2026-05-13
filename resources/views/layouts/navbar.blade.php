{{-- resources/views/layouts/navbar.blade.php --}}

<header class="bg-white border-b border-gray-200 px-6 py-4">

    <div class="flex items-center justify-between">

        <div>
            <h2 class="text-2xl font-bold text-gray-800">
                @yield('title')
            </h2>
        </div>

        <div class="flex items-center gap-4">

            <button class="w-11 h-11 rounded-2xl bg-gray-100">
                <i class="fa-regular fa-bell text-gray-600"></i>
            </button>

            <div class="flex items-center gap-3">

                <img src="https://i.pravatar.cc/100"
                     class="w-11 h-11 rounded-2xl object-cover">

                <div>
                    <h4 class="font-semibold text-gray-800">
                        Admin
                    </h4>

                    <p class="text-sm text-gray-400">
                        Freelancer
                    </p>
                </div>

            </div>

        </div>

    </div>

</header>