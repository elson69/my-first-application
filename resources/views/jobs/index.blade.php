<!-- resources/views/jobs/index.blade.php -->
<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>

    <!-- Create Job Button -->
    <div class="mb-6 flex justify-end">
        <a href="/jobs/create" 
           class="inline-flex justify-center rounded-md bg-indigo-600 px-4 py-2 
                  text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 
                  focus:outline-none focus:ring-2 focus:ring-indigo-500">
            + Create Job
        </a>
    </div>

    <!-- Jobs List -->
    <div class="space-y-4">
        @forelse ($jobs as $job)
            <div class="rounded-lg border border-gray-200 p-4 shadow-sm hover:shadow-md transition">
                <h2 class="text-xl font-semibold text-gray-900">
                    <a href="/jobs/{{ $job->id }}" class="hover:underline">
                        {{ $job->title }}
                    </a>
                </h2>
                <p class="text-sm text-gray-600">Salary: {{ $job->salary }}</p>

                @if ($job->employer)
                    <p class="text-sm text-gray-500">Employer: {{ $job->employer->name }}</p>
                @endif
            </div>
        @empty
            <p class="text-gray-600">No jobs found.</p>
        @endforelse
    </div>

    <!-- Pagination -->
    <div class="mt-6">
        {{ $jobs->links() }}
    </div>
</x-layout>
