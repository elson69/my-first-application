<x-layout>
    <x-slot:heading>
        Contact Us
    </x-slot:heading>

    <p class="text-lg text-gray-700 mb-4">
        Have questions? Reach out to us.
    </p>

    <form action="#" method="POST" class="space-y-4">
        <input type="text" name="name" placeholder="Your Name"
               class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
        <input type="email" name="email" placeholder="Your Email"
               class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
        <textarea name="message" rows="4" placeholder="Your Message"
                  class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500"></textarea>
        <button type="submit" 
                class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">
            Send Message
        </button>
    </form>
</x-layout>
