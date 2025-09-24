<x-layout>
    <x-slot:heading>
        Job Details
    </x-slot:heading>

    <div class="flex justify-center">
        <div class="bg-white shadow-lg rounded-lg p-8 max-w-md w-full text-center">
            <h2 class="text-2xl font-bold mb-4 text-gray-800">
                {{ $job['title'] }}
            </h2>
            <p class="text-gray-600 mb-6">
                This job pays 
                <span class="font-semibold text-green-600">{{ $job['salary'] }}</span> 
                per year.
            </p>

            <a href="/jobs" 
               class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
                ← Back to Jobs
            </a>
        </div>
    </div>
</x-layout>
