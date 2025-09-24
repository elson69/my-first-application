<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Board</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 py-4">
            <h1 class="text-2xl font-bold">Job Board</h1>
        </div>

        <!-- ✅ Updated Navigation -->
        <nav class="bg-gray-800 p-4 text-white flex space-x-4">
            <a href="/" class="{{ request()->is('/') ? 'font-bold underline' : '' }}">
                Home
            </a>
            <a href="/jobs" class="{{ request()->is('jobs') ? 'font-bold underline' : '' }}">
                Jobs
            </a>
        </nav>
    </header>

    <main class="max-w-7xl mx-auto p-6">
        <h2 class="text-xl font-semibold mb-4">{{ $heading }}</h2>
        {{ $slot }}
    </main>

  

</body>
</html>
