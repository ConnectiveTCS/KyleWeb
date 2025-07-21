<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
            <a href="{{ route('projects.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                Create New Project
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl font-bold mb-4">
                        Projects
                    </h1>
                    <table class="w-full border-collapse rounded-lg">
                        <thead class="bg-gray-200 w-full rounded-lg">
                            <tr class="border-b border-black rounded-lg">
                                <th class="px-4 py-2"></th>
                                <th class="px-4 py-2">Client Name</th>
                                <th class="px-4 py-2">Description</th>
                                <th class="px-4 py-2">Budget</th>
                                <th class="px-4 py-2">Status</th>
                                <th class="px-4 py-2">Start Date</th>
                                <th class="px-4 py-2">End Date</th>
                                <th class="px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @foreach ($projects as $project)
                                <tr>
                                    <td class="border px-4 py-2">
                                        <img src="{{ asset('storage/' . $project->client_logo) }}" alt="Project Logo"
                                            class="h-10 w-10 rounded-full">
                                    </td>
                                    <td class="border px-4 py-2">{{ $project->client_name }}</td>
                                    <td class="border px-4 py-2">{{ $project->description }}</td>
                                    <td class="border px-4 py-2">{{ $project->budget }}</td>
                                    <td class="border px-4 py-2">{{ $project->status }}</td>
                                    <td class="border px-4 py-2">{{ $project->start_date }}</td>
                                    <td class="border px-4 py-2">{{ $project->end_date }}</td>
                                    <td class="px-4 py-2 flex flex-col justify-center items-start">
                                        <a href="{{ route('projects.show', $project->id) }}"
                                            class="text-blue-500 hover:underline text-center">View</a>
                                        <a href="{{ route('projects.edit', $project->id) }}"
                                            class="text-yellow-500 hover:underline text-center">Edit</a>
                                        <form action="{{ route('projects.destroy', $project->id) }}" method="POST"
                                            class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="text-red-500 hover:underline text-center">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            @if ($projects->isEmpty())
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
