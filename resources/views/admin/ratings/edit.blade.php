<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Rating') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('ratings.update', $rating->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- User ID -->
                            <div class="mb-4">
                                <label for="user_id" class="block text-gray-700 text-sm font-bold mb-2">User</label>
                                <select id="user_id" name="user_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('user_id') border-red-500 @enderror">
                                    <option value="">Select User</option>
                                    @foreach (\App\Models\User::all() as $user)
                                        <option value="{{ $user->id }}" {{ (old('user_id', $rating->user_id) == $user->id) ? 'selected' : '' }}>
                                            {{ $user->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('user_id')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Project ID -->
                            <div class="mb-4">
                                <label for="project_id" class="block text-gray-700 text-sm font-bold mb-2">Project</label>
                                <select id="project_id" name="project_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('project_id') border-red-500 @enderror">
                                    <option value="">Select Project</option>
                                    @foreach (\App\Models\Project::all() as $project)
                                        <option value="{{ $project->id }}" {{ (old('project_id', $rating->project_id) == $project->id) ? 'selected' : '' }}>
                                            {{ $project->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('project_id')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Client Name -->
                            <div class="mb-4">
                                <label for="client_name" class="block text-gray-700 text-sm font-bold mb-2">Client Name</label>
                                <input type="text" id="client_name" name="client_name" value="{{ old('client_name', $rating->client_name) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('client_name') border-red-500 @enderror">
                                @error('client_name')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Business Name -->
                            <div class="mb-4">
                                <label for="business_name" class="block text-gray-700 text-sm font-bold mb-2">Business Name</label>
                                <input type="text" id="business_name" name="business_name" value="{{ old('business_name', $rating->business_name) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('business_name') border-red-500 @enderror">
                                @error('business_name')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Client Photo -->
                            <div class="mb-4">
                                <label for="client_photo" class="block text-gray-700 text-sm font-bold mb-2">Client Photo</label>
                                @if($rating->client_photo)
                                    <div class="mb-2">
                                        <img src="{{ asset('storage/' . $rating->client_photo) }}" alt="Client Photo" class="h-20 w-20 object-cover rounded">
                                        <p class="text-sm text-gray-600 mt-1">Current photo</p>
                                    </div>
                                @endif
                                <input type="file" id="client_photo" name="client_photo" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('client_photo') border-red-500 @enderror">
                                <p class="text-xs text-gray-600 mt-1">Leave empty to keep current photo</p>
                                @error('client_photo')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Business Photo -->
                            <div class="mb-4">
                                <label for="business_photo" class="block text-gray-700 text-sm font-bold mb-2">Business Photo</label>
                                @if($rating->business_photo)
                                    <div class="mb-2">
                                        <img src="{{ asset('storage/' . $rating->business_photo) }}" alt="Business Photo" class="h-20 w-20 object-cover rounded">
                                        <p class="text-sm text-gray-600 mt-1">Current photo</p>
                                    </div>
                                @endif
                                <input type="file" id="business_photo" name="business_photo" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('business_photo') border-red-500 @enderror">
                                <p class="text-xs text-gray-600 mt-1">Leave empty to keep current photo</p>
                                @error('business_photo')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Project Name -->
                            <div class="mb-4">
                                <label for="project_name" class="block text-gray-700 text-sm font-bold mb-2">Project Name</label>
                                <input type="text" id="project_name" name="project_name" value="{{ old('project_name', $rating->project_name) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('project_name') border-red-500 @enderror">
                                @error('project_name')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Rating -->
                            <div class="mb-4">
                                <label for="rating" class="block text-gray-700 text-sm font-bold mb-2">Rating (1-5)</label>
                                <div class="flex items-center space-x-2">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <div>
                                            <input type="radio" id="rating{{ $i }}" name="rating" value="{{ $i }}" {{ (old('rating', $rating->rating) == $i) ? 'checked' : '' }} class="mr-1">
                                            <label for="rating{{ $i }}">{{ $i }}</label>
                                        </div>
                                    @endfor
                                </div>
                                @error('rating')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Comment -->
                        <div class="mb-4">
                            <label for="comment" class="block text-gray-700 text-sm font-bold mb-2">Comment</label>
                            <textarea id="comment" name="comment" rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('comment') border-red-500 @enderror">{{ old('comment', $rating->comment) }}</textarea>
                            @error('comment')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="flex items-center justify-between mt-6">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Update Rating
                            </button>
                            <a href="{{ route('ratings.index') }}" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
