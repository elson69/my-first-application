<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel Site</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900 flex flex-col min-h-screen">

    <!-- Navbar -->
    <nav class="bg-indigo-700 shadow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <!-- Logo -->
                <div class="flex-shrink-0 text-white font-bold text-lg">
                    MySite
                </div>
                <!-- Links -->
                <div class="flex space-x-4">
                    <a href="/" 
                       class="{{ request()->is('/') ? 'bg-indigo-900 text-white' : 'text-gray-200 hover:bg-indigo-800 hover:text-white' }}
                              rounded-md px-3 py-2 text-sm font-medium">
                        Home
                    </a>
                    <a href="/about" 
                       class="{{ request()->is('about') ? 'bg-indigo-900 text-white' : 'text-gray-200 hover:bg-indigo-800 hover:text-white' }}
                              rounded-md px-3 py-2 text-sm font-medium">
                        About
                    </a>
                    <a href="/contact" 
                       class="{{ request()->is('contact') ? 'bg-indigo-900 text-white' : 'text-gray-200 hover:bg-indigo-800 hover:text-white' }}
                              rounded-md px-3 py-2 text-sm font-medium">
                        Contact
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-extrabold text-indigo-700">
                {{ $heading }}
            </h1>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-lg shadow p-6">
            {{ $slot }}
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-indigo-700 text-gray-200">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 text-center">
            <p>&copy; {{ date('Y') }} MySite. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
