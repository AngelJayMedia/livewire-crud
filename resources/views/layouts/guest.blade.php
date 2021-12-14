<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <x-partials.head :title="$title ?? '' " />
</head>
<body>

    <x-partials.nav />

    <main class="container min-h-screen p-4 mx-auto font-sans antialiased text-gray-900">
        {{ $slot }}
    </main>

    <x-partials.footer />

    <livewire:scripts />
    @stack('scripts')
</body>
</html>
