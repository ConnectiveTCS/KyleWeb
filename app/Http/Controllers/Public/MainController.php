<?php

namespace App\Http\Controllers\Public;

use \App\Models\Project;
use \App\Models\Rating;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index()
    {   
        // Logic to retrieve and display the main page
        $projects = Project::all();
        $ratings = Rating::all();
        return view('public.index', compact('projects', 'ratings'));
    }
    public function show(Project $project)
    {
        // With route model binding, Laravel automatically resolves the project
        return view('public.projects.show', compact('project'));
    }
}
