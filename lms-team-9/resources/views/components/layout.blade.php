<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Kampus LMS' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800 antialiased">

    <nav class="bg-slate-800 text-white">
        <div class="max-w-5xl mx-auto px-4 py-3 flex items-center justify-between">
            <span class="font-semibold text-lg">Kampus LMS</span>

            <div class="flex gap-6 text-sm">
                <a href="{{ route('dashboard') }}"
                   class="hover:text-slate-300 {{ request()->routeIs('dashboard') ? 'font-bold underline' : '' }}">
                    Dashboard
                </a>
                <a href="{{ route('courses.index') }}"
                   class="hover:text-slate-300 {{ request()->routeIs('courses.*') ? 'font-bold underline' : '' }}">
                    Mata Kuliah
                </a>
                <a href="{{ route('about') }}"
                   class="hover:text-slate-300 {{ request()->routeIs('about') ? 'font-bold underline' : '' }}">
                    Tentang
                </a>
            </div>
        </div>
    </nav>

    <main class="max-w-5xl mx-auto px-4 py-8">
        {{ $slot }}
    </main>

</body>
</html>