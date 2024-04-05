<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="antialiased bg-gray-100 dark:bg-dots-lighter selection:bg-red-500 selection:text-white">
    <div class="relative flex justify-center items-center min-h-screen">
        <div class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-xl">
            <h1 class="text-3xl font-bold text-center mb-4">Welcome to Hello Laravel</h1>
            <p class="text-lg text-gray-700 mb-6 text-center">This is a cool project starter template for Laravel, styled with Tailwind CSS.</p>
            <div class="text-center">
                <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Get Started</a>
            </div>
        </div>
    </div>
</body>
</html>
