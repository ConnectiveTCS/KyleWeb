<x-public-layout>
    <x-slot:title>
        {{ $project->client_name }} - Project Details
    </x-slot:title>

    <section class="mt-36 px-16 mb-20">
        <div class="bg-slate-100 rounded-3xl shadow-inner shadow-black p-8">
            
            <!-- Project Header -->
            <div class="flex justify-between items-start mb-10">
                <div>
                    <h1 class="text-5xl font-bold text-balance font-sans">{{ $project->client_name }}</h1>
                    <div class="text-xl text-gray-600 mt-2 font-sans">{{ $project->project_type }}</div>
                </div>
                <div>
                    <span class="px-4 py-2 text-md rounded-full 
                        @if($project->status == 'completed') bg-green-100 text-green-800
                        @elseif($project->status == 'ongoing') bg-blue-100 text-blue-800
                        @else bg-yellow-100 text-yellow-800 @endif">
                        {{ ucfirst($project->status) }}
                    </span>
                </div>
            </div>
            <!-- Project Information -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="md:col-span-2">
                    <div class="bg-white rounded-xl p-6 shadow-md h-full">
                        <h2 class="text-2xl font-semibold mb-4 text-brand-blue">Project Overview</h2>
                        <p class="text-gray-700 text-lg">
                            {{ $project->description ?? 'No description provided.' }}
                        </p>
                        
                        @if($project->client_website)
                        <div class="mt-8">
                            <a href="{{ $project->client_website }}" target="_blank"
                               class="inline-flex items-center px-6 py-3 bg-brand-orange text-white rounded-full hover:bg-brand-blue transition-colors duration-300 jura-500">
                                Visit Website
                                <span class="material-icons ml-2">open_in_new</span>
                            </a>
                        </div>
                        @endif
                    </div>
                </div>
                
                <div>
                    <div class="bg-white rounded-xl p-6 shadow-md">
                        <h2 class="text-2xl font-semibold mb-4 text-brand-blue">Project Details</h2>
                        
                        <div class="space-y-4">
                            @if($project->client_logo)
                            <div class="mb-6 flex justify-center">
                                <img src="{{ asset('storage/' . $project->client_logo) }}" 
                                     alt="{{ $project->client_name }} Logo" 
                                     class="max-w-[150px] max-h-[150px] rounded-lg">
                            </div>
                            @endif
                            
                            <div class="border-t pt-4">
                                <span class="block text-sm font-medium text-gray-500">PROJECT TYPE</span>
                                <span class="block text-lg text-gray-800">{{ $project->project_type }}</span>
                            </div>
                            
                            <div class="border-t pt-4">
                                <span class="block text-sm font-medium text-gray-500">TIMELINE</span>
                                <span class="block text-lg text-gray-800">
                                    @if($project->start_date && $project->end_date)
                                        {{ $project->start_date->format('M d, Y') }} - {{ $project->end_date->format('M d, Y') }}
                                    @elseif($project->start_date)
                                        Started: {{ $project->start_date->format('M d, Y') }}
                                    @else
                                        Timeline not specified
                                    @endif
                                </span>
                            </div>
                            
                            @if($project->client_website)
                            <div class="border-t pt-4">
                                <span class="block text-sm font-medium text-gray-500">CLIENT WEBSITE</span>
                                <a href="{{ $project->client_website }}" target="_blank" 
                                   class="text-brand-blue hover:underline text-lg">
                                    {{ $project->client_website }}
                                    <span class="material-icons ml-2 float-end">open_in_new</span>
                                </a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Project Gallery -->
            @if($project->project_photos && is_array($project->project_photos) && count($project->project_photos) > 0)
            <div class="mt-12">
                <div class="grid grid-cols-1 gap-4">
                    <div class="aspect-w-16 aspect-h-9 bg-gray-100 rounded-lg overflow-hidden">
                        @if(isset($project->project_photos[0]))
                            <img src="{{ asset('storage/' . $project->project_photos[1]) }}" 
                                id="project-main-photo"
                                alt="{{ $project->client_name }} project" 
                                class="object-cover object-top hover:object-bottom transition-all duration-[3000ms] overflow-y-scroll w-full h-96 rounded-xl">
                        @endif
                    </div>
                    
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-4">
                        @foreach(array_slice($project->project_photos, 1, 4) as $index => $photo)
                            <div class="aspect-w-1 aspect-h-1 bg-gray-100 rounded-lg overflow-hidden">
                                @if(is_string($photo))
                                    <img src="{{ asset('storage/' . $photo) }}" 
                                        alt="Project photo {{ $index + 1 }}" 
                                        onclick="document.getElementById('project-main-photo').src='{{ asset('storage/' . $photo) }}'; this.classList.add('border-2 border-brand-orange')"
                                        class="object-cover w-full h-36 rounded-lg hover:scale-105 object-top hover:object-bottom transition-all duration-[3000ms] overflow-y-scroll ">
                                @elseif(is_array($photo) && isset($photo['path']))
                                    <img src="{{ asset('storage/' . $photo['path']) }}" 
                                        alt="Project photo {{ $index + 1 }}" 
                                        class="object-cover w-full h-36 rounded-lg hover:scale-105 transition-transform duration-300">
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endif
            
            
            
            <!-- Back to Projects Link -->
            <div class="mt-12 text-center">
                <a href="/#portfolio" 
                   class="inline-flex items-center px-6 py-3 bg-brand-blue text-white rounded-full hover:bg-brand-orange transition-colors duration-300 jura-500">
                    <span class="material-icons mr-2">arrow_back</span>
                    Back to Portfolio
                </a>
            </div>
        </div>
    </section>
</x-public-layout>
