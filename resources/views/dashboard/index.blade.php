{{-- resources/views/dashboard/index.blade.php --}}

@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="space-y-6">

    {{-- Header --}}
    <div>
        <h1 class="text-3xl font-bold text-gray-800">
            Dashboard
        </h1>

        <p class="text-gray-500 mt-1">
            Selamat datang kembali di sistem freelance finance.
        </p>
    </div>

    {{-- Alert --}}
    <div class="bg-blue-50 border border-blue-100 rounded-2xl px-5 py-4 flex items-center justify-between">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-xl bg-blue-100 flex items-center justify-center">
                <i class="fa-solid fa-bell text-blue-600"></i>
            </div>

            <p class="text-sm text-blue-700">
                Pengingat: 3 invoice akan jatuh tempo minggu ini.
            </p>
        </div>

        <button class="text-blue-600">
            <i class="fa-solid fa-arrow-right"></i>
        </button>
    </div>

    {{-- Statistik --}}
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">

        {{-- Card --}}
        <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

            <div class="flex items-center justify-between">

                <div class="w-14 h-14 rounded-2xl bg-blue-100 flex items-center justify-center">
                    <i class="fa-solid fa-wallet text-blue-700 text-xl"></i>
                </div>

                <button class="bg-blue-900 text-white px-4 py-2 rounded-xl text-sm">
                    Tarik
                </button>

            </div>

            <div class="mt-6">
                <p class="text-gray-400 text-sm uppercase">
                    Saldo Tersedia
                </p>

                <h2 class="text-4xl font-bold text-gray-800 mt-2">
                    Rp8.527.882
                </h2>
            </div>

        </div>

        {{-- Card --}}
        <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

            <div class="w-14 h-14 rounded-2xl bg-yellow-100 flex items-center justify-center">
                <i class="fa-solid fa-hourglass-half text-yellow-600 text-xl"></i>
            </div>

            <div class="mt-6">
                <p class="text-gray-400 text-sm uppercase">
                    Invoice Pending
                </p>

                <h2 class="text-4xl font-bold text-gray-800 mt-2">
                    Rp2.500.000
                </h2>
            </div>

        </div>

        {{-- Card --}}
        <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

            <div class="flex items-center justify-between">

                <div class="w-14 h-14 rounded-2xl bg-green-100 flex items-center justify-center">
                    <i class="fa-solid fa-circle-check text-green-600 text-xl"></i>
                </div>

                <button class="border border-gray-200 px-4 py-2 rounded-xl text-sm">
                    Detail
                </button>

            </div>

            <div class="mt-6">
                <p class="text-gray-400 text-sm uppercase">
                    Invoice Dibayar
                </p>

                <h2 class="text-4xl font-bold text-gray-800 mt-2">
                    Rp12.000.000
                </h2>
            </div>

        </div>

        {{-- Card --}}
        <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">

            <div class="w-14 h-14 rounded-2xl bg-purple-100 flex items-center justify-center">
                <i class="fa-solid fa-users text-purple-600 text-xl"></i>
            </div>

            <div class="mt-6">
                <p class="text-gray-400 text-sm uppercase">
                    Total Client
                </p>

                <h2 class="text-4xl font-bold text-gray-800 mt-2">
                    18
                </h2>
            </div>

        </div>

    </div>

    {{-- Statistik --}}
    <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">

        {{-- Chart --}}
        <div class="xl:col-span-2 bg-white rounded-3xl shadow-sm border border-gray-100 p-6">

            <div class="flex items-center justify-between mb-6">

                <div>
                    <h3 class="text-xl font-bold text-gray-800">
                        Statistik Penghasilan
                    </h3>

                    <p class="text-gray-400 text-sm mt-1">
                        Statistik pemasukan freelance bulanan
                    </p>
                </div>

                <div class="border rounded-xl px-4 py-2 text-sm text-gray-600">
                    Mei 2026
                </div>

            </div>

            <canvas id="incomeChart" height="120"></canvas>

        </div>

        {{-- Aktivitas --}}
        <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-6">

            <div class="flex items-center justify-between">

                <h3 class="text-xl font-bold text-gray-800">
                    Aktivitas
                </h3>

                <button class="text-gray-400">
                    <i class="fa-solid fa-ellipsis"></i>
                </button>

            </div>

            <div class="mt-6 space-y-5">

                <div class="flex gap-4">

                    <div class="w-11 h-11 rounded-2xl bg-green-100 flex items-center justify-center">
                        <i class="fa-solid fa-check text-green-600"></i>
                    </div>

                    <div>
                        <h4 class="font-semibold text-gray-800">
                            Invoice Dibayar
                        </h4>

                        <p class="text-sm text-gray-500">
                            INV-2026-001 berhasil dibayar
                        </p>
                    </div>

                </div>

                <div class="flex gap-4">

                    <div class="w-11 h-11 rounded-2xl bg-blue-100 flex items-center justify-center">
                        <i class="fa-solid fa-user-plus text-blue-600"></i>
                    </div>

                    <div>
                        <h4 class="font-semibold text-gray-800">
                            Client Baru
                        </h4>

                        <p class="text-sm text-gray-500">
                            PT Digital Nusantara ditambahkan
                        </p>
                    </div>

                </div>

                <div class="flex gap-4">

                    <div class="w-11 h-11 rounded-2xl bg-red-100 flex items-center justify-center">
                        <i class="fa-solid fa-money-bill text-red-600"></i>
                    </div>

                    <div>
                        <h4 class="font-semibold text-gray-800">
                            Pengeluaran
                        </h4>

                        <p class="text-sm text-gray-500">
                            Pembayaran hosting Rp250.000
                        </p>
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection

@push('scripts')

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

const ctx = document.getElementById('incomeChart');

new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei'],
        datasets: [{
            label: 'Penghasilan',
            data: [3000000, 5000000, 4000000, 7000000, 12000000],
            borderWidth: 3,
            tension: 0.4,
            fill: true
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                display: false
            }
        }
    }
});

</script>

@endpush