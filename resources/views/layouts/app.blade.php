<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Freelance Finance')</title>

    {{-- Tailwind CSS --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Font Awesome --}}
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>

    {{-- Google Font --}}
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">

    <style>
        body{
            font-family: 'Inter', sans-serif;
        }

        .sidebar-scroll::-webkit-scrollbar{
            width: 4px;
        }

        .sidebar-scroll::-webkit-scrollbar-thumb{
            background: #d1d5db;
            border-radius: 10px;
        }
    </style>

    @stack('styles')

</head>

<body class="bg-gray-100">

<div class="flex min-h-screen">

    {{-- Sidebar --}}
    @include('layouts.sidebar')

    {{-- Main Content --}}
    <div class="flex-1 flex flex-col">

        {{-- Navbar --}}
        @include('layouts.navbar')

        {{-- Page Content --}}
        <main class="flex-1 p-6">

            @yield('content')

        </main>

        {{-- Footer --}}
        @include('layouts.footer')

    </div>

</div>

{{-- Chart JS --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

@stack('scripts')

</body>
</html>