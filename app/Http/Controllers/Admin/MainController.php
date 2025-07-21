<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index()
    {
        // Logic for the main admin dashboard
        $contacts = \App\Models\Contact::all();
        $projects = \App\Models\Project::all();
        $ratings = \App\Models\Rating::all();
        return view('dashboard', compact('contacts', 'projects', 'ratings'));
    }
}
