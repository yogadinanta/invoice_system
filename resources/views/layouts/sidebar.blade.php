{{-- resources/views/layouts/sidebar.blade.php --}}

<aside class="w-72 bg-white border-r border-gray-200 min-h-screen px-6 py-8 sidebar-scroll overflow-y-auto">

    {{-- Logo --}}
    <div class="flex items-center gap-3 mb-10">

        <div class="w-12 h-12 rounded-2xl bg-blue-600 flex items-center justify-center">
            <i class="fa-solid fa-wallet text-white text-xl"></i>
        </div>

        <div>
            <h1 class="font-bold text-xl text-gray-800">
                FreelanceApp
            </h1>

            <p class="text-sm text-gray-400">
                Finance Dashboard
            </p>
        </div>

    </div>

    {{-- Menu --}}
    <nav class="space-y-2">

        <a href="{{ route('dashboard') }}"
           class="flex items-center gap-4 px-4 py-3 rounded-2xl bg-blue-600 text-white">

            <i class="fa-solid fa-house"></i>

            <span class="font-medium">
                Dashboard
            </span>

        </a>

        <a href="{{ route('invoice.index') }}"
           class="flex items-center gap-4 px-4 py-3 rounded-2xl text-gray-600 hover:bg-gray-100">

            <i class="fa-solid fa-file-invoice"></i>

            <span>
                Invoice
            </span>

        </a>

        <a href="{{ route('transaction.income') }}"
           class="flex items-center gap-4 px-4 py-3 rounded-2xl text-gray-600 hover:bg-gray-100">

            <i class="fa-solid fa-wallet"></i>

            <span>
                Pemasukan
            </span>

        </a>

        <a href="{{ route('transaction.expense') }}"
           class="flex items-center gap-4 px-4 py-3 rounded-2xl text-gray-600 hover:bg-gray-100">

            <i class="fa-solid fa-money-bill"></i>

            <span>
                Pengeluaran
            </span>

        </a>

        <a href="{{ route('client.index') }}"
           class="flex items-center gap-4 px-4 py-3 rounded-2xl text-gray-600 hover:bg-gray-100">

            <i class="fa-solid fa-users"></i>

            <span>
                Client
            </span>

        </a>

        <a href="{{ route('report.index') }}"
           class="flex items-center gap-4 px-4 py-3 rounded-2xl text-gray-600 hover:bg-gray-100">

            <i class="fa-solid fa-chart-line"></i>

            <span>
                Laporan
            </span>

        </a>

    </nav>

</aside>