<div>
    <!-- Act only according to that maxim whereby you can, at the same time, will that it should become a universal law. - Immanuel Kant -->
</div>
<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
            <a href="{{ route('ratings.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                Create New Rating
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl font-bold mb-4">
                        Rating
                    </h1>
                    <table class="w-full border-collapse rounded-lg">
                        <thead class="bg-gray-200 w-full rounded-lg">
                            <tr class="border-b border-black rounded-lg">
                                <th class="px-4 py-2"></th>
                                <th class="px-4 py-2">Project Name</th>
                                <th class="px-4 py-2">Client Name</th>
                                <th class="px-4 py-2">Comment</th>
                                <th class="px-4 py-2">Rating</th>
                                <th class="px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @foreach ($ratings as $rating)
                                <tr>
                                    <td class="border px-4 py-2">
                                        <img src="{{ asset('storage/' . $rating->client_photo) }}" alt="Project Logo"
                                            class="h-16 w-16 object-contain">
                                    </td>
                                    <td class="border px-4 py-2">{{ $rating->project_name }}</td>
                                    <td class="border px-4 py-2">{{ $rating->client_name }}</td>
                                    <td class="border px-4 py-2">{{ $rating->comment }}</td>
                                    <td class="border px-4 py-2">{{ $rating->rating }}</td>
                                    <td class="px-4 py-2 flex flex-col justify-center items-start">
                                        <a href="{{ route('ratings.show', $rating->id) }}"
                                            class="text-blue-500 hover:underline text-center">View</a>
                                        <a href="{{ route('ratings.edit', $rating->id) }}"
                                            class="text-yellow-500 hover:underline text-center">Edit</a>
                                        <form action="{{ route('ratings.destroy', $rating->id) }}" method="POST"
                                            class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="text-red-500 hover:underline text-center">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            @if ($ratings->isEmpty())
                                <tr>
                                    <td colspan="9" class="text-center px-4 py-2">No projects found.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
