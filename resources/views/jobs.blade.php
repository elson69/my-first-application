<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($jobs as $job)
            <div class="bg-white shadow-md rounded-lg p-6 hover:shadow-xl transition">
                
                <!-- Job Title -->
                <h2 class="text-xl font-semibold mb-2 text-gray-800">
                    {{ $job->title }}
                </h2>

                <!-- Employer Name and Job Info -->
                <p class="text-blue-500 mb-2">
                    <strong class="text-laracasts">{{ $job->employer->name }}:</strong>
                    {{ $job->title }} pays {{ $job->salary }} per year.
                </p>

                <!-- Tags -->
                <div class="mb-4">
                    @foreach($job->tags as $tag)
                        <span class="bg-gray-200 text-gray-700 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded-full">
                            {{ $tag->name }}
                        </span>
                    @endforeach
                </div>

                <!-- Salary -->
                <p class="text-gray-600 mb-4">
                    Salary: <span class="font-medium">{{ $job->salary }}</span>
                </p>

                <!-- View Details -->
                <a href="/jobs/{{ $job->id }}" class="text-blue-500 font-medium hover:underline">
                    View Details →
                </a>
            </div>
        @endforeach
    </div>
</x-layout>
