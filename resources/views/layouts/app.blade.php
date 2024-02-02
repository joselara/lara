<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jose Lara: From Code to Company - Software & Startup Expertise</title>
    <meta name="description"
        content="Seasoned software engineer with a flair for entrepreneurship. Discover a portfolio that showcases a blend of technical prowess & visionary leadership.">
    <meta property="og:image" content="{{ assetUrl('og.svg') }}">
    <link rel="icon" type="image/svg+xml"
        href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🎯</text></svg>">
    @vite('resources/css/app.css')
</head>

<body class="font-sans antialiased">
    <div id="app">
        <div class="fixed inset-0 flex justify-center sm:px-8">
            <div class="flex w-full max-w-7xl lg:px-8">
                <div class="w-full bg-white ring-1 ring-zinc-100"></div>
            </div>
        </div>
        <div class="relative">
            @yield('content')
            <x-footer />
        </div>
    </div>
    @vite('resources/js/app.ts')
</body>

</html>
