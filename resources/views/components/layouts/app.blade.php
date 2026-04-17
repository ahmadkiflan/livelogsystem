<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? config('app.name') }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    {{-- @fluxAppearance --}}

</head>

<body class="min-h-screen bg-white dark:bg-zinc-800 antialiased">
    @include('components.header')

    <flux:main container>
        <flux:heading size="xl" level="1">

        </flux:heading>
        <flux:text class="text-base">{{ $slot }}</flux:text>
        {{-- <flux:separator variant="subtle" /> --}}
    </flux:main>

    @livewireScripts
    @fluxScripts
    {{-- <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>


</body>

</html>
