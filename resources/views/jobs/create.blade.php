<!-- resources/views/jobs/edit.blade.php -->
<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>

    <form method="POST" action="/jobs" class="space-y-6">
        @csrf

        <!-- Job Title -->
        <div>
            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" 
                   name="title" 
                   id="title" 
                   value="{{ old('title') }}"
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                          focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" 
                   required>
            
            @error('title')
                <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Salary -->
        <div>
            <label for="salary" class="block text-sm font-medium text-gray-700">Salary</label>
            <input type="text" 
                   name="salary" 
                   id="salary" 
                   value="{{ old('salary') }}"
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                          focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" 
                   required>
            
            @error('salary')
                <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Buttons -->
        <div class="flex justify-between items-center">
            <div>
                <!-- Delete button (submits hidden form below) -->
                <button form="delete-form" 
                        class="text-sm text-red-600 hover:text-red-800">
                    Delete
                </button>
            </div>
            <div class="space-x-3">
                <a href="/jobs" 
                   class="text-sm font-medium text-gray-600 hover:text-gray-800">
                    Cancel
                </a>
                <button type="submit" 
                        class="inline-flex justify-center rounded-md bg-indigo-600 px-4 py-2 
                               text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 
                               focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    Update
                </button>
            </div>
        </div>
    </form>

    <!-- Hidden delete form -->
    <form method="POST" action="/jobs" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
