<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" 
               class="block bg-white shadow-md rounded-lg p-6 hover:shadow-xl transition">
                <h2 class="text-xl font-semibold mb-2 text-gray-800">
                    {{ $job['title'] }}
                </h2>
                <p class="text-gray-600 mb-4">
                    Salary: <span class="font-medium">{{ $job['salary'] }}</span>
                </p>
                <span class="text-blue-500 font-medium hover:underline">
                    View Details →
                </span>
            </a>
        @endforeach
    </div>
</x-layout>
