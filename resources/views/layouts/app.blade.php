<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="fixed inset-0 flex justify-center sm:px-8">
        <div class="flex w-full max-w-7xl lg:px-8">
            <div class="w-full bg-white ring-1 ring-zinc-100"></div>
        </div>
    </div>
    <div class="relative">
        <x-container>
            <x-header>
                <x-container>
                    <h1 class="text-4xl font-bold tracking-tight text-zinc-800 sm:text-5xl">
                        Software Expertise, Startup Spirit: Crafting the Next Generation of Digital Solutions
                    </h1>
                </x-container>
            </x-header>
        </x-container>

        @yield('content')

        <x-footer />
    </div>

</body>

</html>
