<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl font-bold mb-4">
                        Contact Form
                        Submissions
                    </h1>
                    <table class=" w-full border-collapse rounded-lg">
                        <thead class="bg-gray-200 w-full rounded-lg">
                            <tr class="border-b border-black rounded-lg">
                                <th class="px-4 py-2">Name</th>
                                <th class="px-4 py-2">Email</th>
                                <th class="px-4 py-2">Phone</th>
                                <th class="px-4 py-2">Message</th>
                                <th class="px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            {{-- Loop through contacts --}}
                            @foreach ($contacts as $contact)
                                <tr>
                                    <td class="border px-4 py-2">{{ $contact->name }}</td>
                                    <td class="border px-4 py-2">{{ $contact->email }}</td>
                                    <td class="border px-4 py-2">{{ $contact->phone }}</td>
                                    <td class="border px-4 py-2">{{ $contact->message }}</td>
                                    <td class="px-4 py-2 flex flex-col justify-center items-start">
                                        {{-- Action buttons --}}
                                        <a href="{{ route('contact.show', $contact->id) }}"
                                            class="text-blue-500 hover:underline text-center">View</a>
                                        <a href="{{ route('contact.edit', $contact->id) }}"
                                            class="text-yellow-500 hover:underline text-center">Edit</a>
                                        <form action="{{ route('contact.destroy', $contact->id) }}" method="POST"
                                            class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="text-red-500 hover:underline text-center">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            {{-- If no contacts, show a message --}}
                            @if ($contacts->isEmpty())
                                <tr>
                                    <td colspan="5" class="text-center px-4 py-2">No submissions found.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
       <div class="pb-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl font-bold mb-4">
                        Projects
                    </h1>
                    <table class=" w-full border-collapse rounded-lg">
                        <thead class="bg-gray-200 w-full rounded-lg">
                            <tr class="border-b border-black rounded-lg">
                                <th class="px-4 py-2">Project Name</th>
                                <th class="px-4 py-2">Description</th>
                                <th class="px-4 py-2">Status</th>
                                <th class="px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            {{-- Loop through projects --}}
                            @foreach ($projects as $project)
                                <tr>
                                    <td class="border px-4 py-2">{{ $project->name }}</td>
                                    <td class="border px-4 py-2">{{ $project->description }}</td>
                                    <td class="border px-4 py-2">{{ $project->status }}</td>
                                    <td class="px-4 py-2 flex flex-col justify-center items-start">
                                        {{-- Action buttons --}}
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
                            {{-- If no projects, show a message --}}
                            @if ($projects->isEmpty())
                                <tr>
                                    <td colspan="4" class="text-center px-4 py-2">No projects found.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
