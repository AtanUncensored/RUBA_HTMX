<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel-Htmx</title>
    <script src="https://unpkg.com/htmx.org@1.9.12"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex h-screen bg-gray-100 font-sans">
    <!-- Sidebar -->
    <div class="w-64 bg-black text-white flex flex-col overflow-y-auto">
        <div id="brand" class="text-3xl font-bold p-4 text-center">
            Mr. Dyi
        </div>
        <nav id="main-nav" class="flex flex-col">
            <a href="/" class="flex items-center p-4 hover:bg-gray-800 text-xl">
                <svg class="h-8 w-8 text-red-500 mr-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z"/>  
                    <polyline points="5 12 3 12 12 3 21 12 19 12" />  
                    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />  
                    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                </svg>
                Home
            </a>
            <a href="/about" class="flex items-center p-4 hover:bg-gray-800 text-xl">
                <svg class="h-8 w-8 text-red-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                About
            </a>
            <a href="/products" class="flex items-center p-4 hover:bg-gray-800 text-xl">
                <svg class="h-8 w-8 text-red-500 mr-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="9" cy="21" r="1" />  
                    <circle cx="20" cy="21" r="1" />  
                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6" />
                </svg>
                Products
            </a>
            <a href="/contact" class="flex items-center p-4 hover:bg-gray-800 text-xl">
                <svg class="h-8 w-8 text-red-500 mr-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z"/>  
                    <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />  
                    <path d="M15 6h6m-3 -3v6" />
                </svg>
                Contact Us
            </a>
        </nav>
        
    </div>

    <!-- Main Content Area -->
    <div class="flex-1 flex flex-col">
        <section class="flex-1 p-4 overflow-y-auto">
            <article id="content" class="bg-black rounded-lg shadow-lg p-6">
                @yield('content')
            </article>
        </section>
        <footer class="text-center text-gray-500 py-3 bg-black text-white">
            Copyright &copy; 2024. All rights reserved.
        </footer>
    </div>
</body>

</html>


