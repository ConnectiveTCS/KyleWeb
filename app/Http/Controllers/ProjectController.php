<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //
    public function index()
    {
        // Logic to retrieve and display projects
        $projects = \App\Models\Project::all();
        return view('projects.index', compact('projects'));
    }
    public function show($id)
    {
        // Logic to retrieve a single project by ID
        $project = \App\Models\Project::findOrFail($id);
        return view('projects.show', compact('project'));
    }
    public function create()
    {
        // Logic to show the form for creating a new project
        return view('projects.create');
    }
    public function store(Request $request)
    {
        // Logic to validate and store a new project
        $request->validate([
            'client_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|string|in:pending,ongoing,completed',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'client_photo' => 'nullable|image|max:2048',
            'client_logo' => 'nullable|image|max:2048',
            'client_website' => 'nullable|url',
            'client_email' => 'nullable|email',
            'client_phone' => 'nullable|string|max:15',
            'project_type' => 'nullable|string|max:100',
        ]);
    }
}