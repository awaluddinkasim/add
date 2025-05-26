<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50">
    <x-sidebar />

    <x-navbar />

    <main class="lg:ms-64 px-7 py-10">
        <div class="max-w-[100rem] w-full mx-auto">
            <h1 class="text-3xl dark:text-white font-medium mb-5">{{ $title ?? config('app.name') }}</h1>
            {{ $slot }}
        </div>
    </main>

    @stack('scripts')
</body>

</html>
