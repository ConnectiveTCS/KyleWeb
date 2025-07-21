<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Project') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-between items-center mb-6">
                        <h1 class="text-2xl font-bold">Edit Project</h1>
                        <form action="{{ route('projects.destroy', $project->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this project?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Delete Project</button>
                        </form>
                    </div>

                    <form action="{{ route('projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-4">
                            <label for="client_name" class="block text-sm font-medium text-gray-700">Client Name</label>
                            <input type="text" name="client_name" id="client_name" value="{{ $project->client_name }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        </div>

                        <div class="mb-4">
                            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                            <textarea name="description" id="description" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">{{ $project->description }}</textarea>
                        </div>

                        <div class="mb-4">
                            <label for="project_type" class="block text-sm font-medium text-gray-700">Project Type</label>
                            <input type="text" name="project_type" id="project_type" value="{{ $project->project_type }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        </div>

                        <div class="mb-4">
                            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                            <select name="status" id="status" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                <option value="pending" {{ $project->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="ongoing" {{ $project->status == 'ongoing' ? 'selected' : '' }}>Ongoing</option>
                                <option value="completed" {{ $project->status == 'completed' ? 'selected' : '' }}>Completed</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="start_date" class="block text-sm font-medium text-gray-700">Start Date</label>
                            <input type="date" name="start_date" id="start_date" value="{{ $project->start_date ? $project->start_date->format('Y-m-d') : '' }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        </div>
                        
                        <div class="mb-4">
                            <label for="end_date" class="block text-sm font-medium text-gray-700">End Date</label>
                            <input type="date" name="end_date" id="end_date" value="{{ $project->end_date ? $project->end_date->format('Y-m-d') : '' }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        </div>
                        
                        <div class="mb-4">
                            <label for="client_website" class="block text-sm font-medium text-gray-700">Client Website</label>
                            <input type="url" name="client_website" id="client_website" value="{{ $project->client_website }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="https://example.com">
                        </div>
                        
                        <div class="mb-6">
                            <label for="client_logo" class="block text-sm font-medium text-gray-700 mb-2">Client Logo</label>
                            
                            @if($project->client_logo)
                            <div class="mb-3">
                                <p class="text-sm text-gray-600 mb-2">Current logo:</p>
                                <div class="w-32 h-32 bg-gray-100 rounded-lg p-2 flex items-center justify-center">
                                    <img src="{{ asset('storage/' . $project->client_logo) }}" alt="{{ $project->client_name }} Logo" class="max-w-full max-h-full">
                                </div>
                            </div>
                            @endif
                            
                            <input type="file" name="client_logo" id="client_logo" accept="image/*" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            <p class="text-sm text-gray-500 mt-1">Upload a new logo to replace the current one</p>
                        </div>
                        
                        <div class="mb-6">
                            <label for="project_photos" class="block text-sm font-medium text-gray-700 mb-2">Project Photos</label>
                            
                            @if($project->project_photos && is_array($project->project_photos) && count($project->project_photos) > 0)
                            <div class="mb-3">
                                <p class="text-sm text-gray-600 mb-2">Current photos:</p>
                                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-3">
                                    @foreach($project->project_photos as $photo)
                                    <div class="aspect-w-16 aspect-h-9 bg-gray-100 rounded-lg overflow-hidden">
                                        @if(is_string($photo))
                                            <img src="{{ asset('storage/' . $photo) }}" alt="Project photo" class="object-cover w-full h-full">
                                        @endif
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            @endif
                            
                            <input type="file" name="project_photos[]" id="project_photos" accept="image/*" multiple class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            <p class="text-sm text-gray-500 mt-1">Upload new photos to replace all current ones</p>
                        </div>
                        
                        <div class="flex items-center justify-end mt-6">
                            <a href="{{ route('projects.show', $project->id) }}" class="bg-gray-300 text-gray-700 px-4 py-2 rounded hover:bg-gray-400 mr-2">
                                Cancel
                            </a>
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                                Update Project
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
