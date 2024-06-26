<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NavigationHTMX</title>
    <script src="https://unpkg.com/htmx.org@1.9.12"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex h-screen bg-gray-100 font-sans">
    <!-- Sidebar -->
    <div class="w-64 bg-black text-white flex flex-col overflow-y-auto">
        <div id="brand" class="text-3xl font-bold p-4 text-center">
            Diy
        </div>
        <nav id="main-nav" class="flex flex-col">
            <a href="/" class="p-4 hover:bg-gray-800">Home</a>
            <a href="/about" class="p-4 hover:bg-gray-800">About</a>
            <a href="/products" class="p-4 hover:bg-gray-800">Products</a>
            <a href="/contact" class="p-4 hover:bg-gray-800">Contact Us</a>
        </nav>
    </div>

    <!-- Main Content Area -->
    <div class="flex-1 flex flex-col">
        <section class="flex-1 p-4 overflow-y-auto">
            <article id="content" class="bg-white rounded-lg shadow-lg p-6">
                @yield('content')
            </article>
        </section>
        <footer class="text-center text-gray-500 py-3 bg-black text-white">
            Copyright &copy; 2024. All rights reserved.
        </footer>
    </div>
</body>

</html>


