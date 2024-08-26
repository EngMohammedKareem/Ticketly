<x-app-layout>
    <div class="flex flex-col justify-center items-center p-6">
        <h1 class="text-3xl font-bold">CREATE A NEW TICKET</h1>
        <form method="POST" action="{{ route('tickets.store') }}" class="space-y-4 w-full max-w-md">
            @csrf
            <div>
                <label for="title" class="block mb-2 text-sm font-medium text-gray-700">Title</label>
                <input id="title" name="title" type="text" class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required />
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>

            <div>
                <label for="description" class="block mb-2 text-sm font-medium text-gray-700">Description</label>
                <textarea id="description" name="description" rows="4" class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required></textarea>
                <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </div>

            <div>
                <label for="priority" class="block mb-2 text-sm font-medium text-gray-700">Priority</label>
                <select id="priority" name="priority" class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                    <option value="low">Low</option>
                    <option value="medium">Medium</option>
                    <option value="high">High</option>
                </select>
                <x-input-error :messages="$errors->get('priority')" class="mt-2" />
            </div>

            <div class="text-center">
                <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded" type="submit">
                    Submit
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
