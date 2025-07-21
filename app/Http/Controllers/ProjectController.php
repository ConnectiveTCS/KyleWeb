<?php

namespace App\Http\Controllers;

use \App\Models\Project;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //
    public function index()
    {
        // Logic to retrieve and display projects
        $projects = \App\Models\Project::all();
        return view('admin.projects.index', compact('projects'));
    }
    public function show($id)
    {
        // Logic to retrieve a single project by ID
        $project = \App\Models\Project::findOrFail($id);
        return view('admin.projects.show', compact('project'));
    }
    public function create()
    {
        // Logic to show the form for creating a new project
        return view('admin.projects.create');
    }
    public function store(Request $request)
    {
        // Logic to validate and store a new project
        $validated = $request->validate([
            'client_name' => 'required|string|max:255',
            'project_photos.*' => 'nullable|file|image|max:2048',
            'client_logo' => 'nullable|file|image|max:2048',
            'description' => 'nullable|string|max:1000',
            'status' => 'in:pending,ongoing,completed',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'client_website' => 'nullable|url',
            'project_type' => 'nullable|string|max:255',
        ]);
        
        $data = $request->except(['client_logo', 'project_photos']);
        
        // Handle client logo upload
        if ($request->hasFile('client_logo')) {
            $path = $request->file('client_logo')->store('logos', 'public');
            $data['client_logo'] = $path;
            Log::info('Client logo stored at: ' . $path);
        }   
        
        // Handle project photos upload
        $photos = [];
        if ($request->hasFile('project_photos')) {
            foreach ($request->file('project_photos') as $photo) {
                $path = $photo->store('projects', 'public');
                $photos[] = $path;
                Log::info('Project photo stored at: ' . $path);
            }
            $data['project_photos'] = $photos;
        }
        
        // Create the project
        $project = Project::create($data);
        Log::info('Project created successfully', ['project' => $project->toArray()]);
        return redirect()->route('projects.index')->with('success', 'Project created successfully.');
    }
    public function edit($id)
    {
        // Logic to show the form for editing an existing project
        $project = \App\Models\Project::findOrFail($id);
        return view('admin.projects.edit', compact('project'));
    }
    public function update(Request $request, $id)
    {
        // Logic to validate and update an existing project
        $request->validate([
            'client_name' => 'required|string|max:255',
            'project_photos.*' => 'nullable|file|image|max:2048',
            'client_logo' => 'nullable|file|image|max:2048',
            'description' => 'nullable|string|max:1000',
            'status' => 'in:pending,ongoing,completed',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'client_website' => 'nullable|url',
            'project_type' => 'nullable|string|max:255',
        ]);
        
        $project = Project::findOrFail($id);
        $data = $request->except(['client_logo', 'project_photos']);
        
        // Handle client logo upload
        if ($request->hasFile('client_logo')) {
            // Delete old logo if exists
            if ($project->client_logo) {
                Storage::disk('public')->delete($project->client_logo);
            }
            
            $path = $request->file('client_logo')->store('logos', 'public');
            $data['client_logo'] = $path;
            Log::info('Client logo updated at: ' . $path);
        }
        
        // Handle project photos upload
        if ($request->hasFile('project_photos')) {
            // Delete old photos if they exist
            if ($project->project_photos && is_array($project->project_photos)) {
                foreach ($project->project_photos as $photo) {
                    Storage::disk('public')->delete($photo);
                }
            }
            
            $photos = [];
            foreach ($request->file('project_photos') as $photo) {
                $path = $photo->store('projects', 'public');
                $photos[] = $path;
                Log::info('Project photo updated at: ' . $path);
            }
            $data['project_photos'] = $photos;
        }
        
        // Update the project
        $project->update($data);
        Log::info('Project updated successfully', ['project' => $project->toArray()]);
        return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    }
    /**
     * Remove the specified project from storage.
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        
        // Delete associated files
        if ($project->client_logo) {
            Storage::disk('public')->delete($project->client_logo);
        }
        
        if ($project->project_photos && is_array($project->project_photos)) {
            foreach ($project->project_photos as $photo) {
                Storage::disk('public')->delete($photo);
            }
        }
        
        // Delete the project
        $project->delete();
        
        Log::info('Project deleted successfully', ['project_id' => $id]);
        
        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }
}