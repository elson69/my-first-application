<x-layout>
    <x-slot:heading>
        Edit Job
    </x-slot:heading>

    <div class="bg-white shadow-md rounded-lg p-8">
        <form method="POST" action="/jobs/{{ $job->id }}" class="space-y-6">
            @csrf
            @method('PATCH')

            <!-- Title -->
            <div>
                <label for="title" class="block text-sm font-medium text-gray-900">Title</label>
                <input type="text" name="title" id="title"
                       value="{{ old('title', $job->title) }}"
                       class="mt-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                       >
                @error('title')
                    <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Salary -->
            <div>
                <label for="salary" class="block text-sm font-medium text-gray-900">Salary</label>
                <input type="text" name="salary" id="salary"
                       value="{{ old('salary', $job->salary) }}"
                       class="mt-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                       >
                @error('salary')
                    <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Actions -->
            <div class="flex items-center justify-between">
                <!-- Left: Delete -->


                <!-- Right: Cancel + Save -->
                <div class="flex gap-3">
                    <a href="/jobs/{{ $job->id }}"
                       class="px-5 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 transition">
                        Cancel
                    </a>
                    <button type="submit"
                            class="px-5 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">
                        Save Changes
                    </button>
                </div>
            </div>
        </form>

                        <form method="POST" action="/jobs/{{ $job->id }}" class="mt-4"
                      onsubmit="return confirm('Are you sure you want to delete this job?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                            class="px-5 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition">
                        🗑 Delete
                    </button>
                </form>
    </div>
</x-layout>
