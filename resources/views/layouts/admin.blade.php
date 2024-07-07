<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    @vite('resources/css/app.css')

</head>
<body class="bg-gray-100">
    <header class="bg-blue-500 p-4">
        <nav class="container mx-auto flex justify-between items-center">
            <!-- Navigasi -->
            <h1 class="text-white text-xl font-bold">Admin Panel</h1>
        </nav>
    </header>
    <div class="container mx-auto py-6">
        @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
