<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    //
    // This controller will handle the logic for managing ratings
    // such as creating, updating, deleting, and retrieving ratings.
    public function index()
    {
        // Logic to retrieve and display all ratings
        $ratings = Rating::all();
        return view('ratings.index', compact('ratings'));
    }
    public function create()
    {
        // Logic to show the form for creating a new rating
        return view('ratings.create');
    }
    public function store(Request $request)
    {
        // Logic to validate and store a new rating
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'project_id' => 'required|exists:projects,id',
            'client_name' => 'nullable|string|max:255',
            'business_name' => 'nullable|string|max:255',
            'client_photo' => 'nullable|image|max:2048',
            'business_photo' => 'nullable|image|max:2048',
            'project_name' => 'nullable|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string|max:1000',
        ]);
        // Handle file uploads for client_photo and business_photo
        if ($request->hasFile('client_photo')) {
            $clientPhotoPath = $request->file('client_photo')->store('photos', 'public');
            $request->merge(['client_photo' => $clientPhotoPath]);
        }
        if ($request->hasFile('business_photo')) {
            $businessPhotoPath = $request->file('business_photo')->store('photos', 'public');
            $request->merge(['business_photo' => $businessPhotoPath]);
        }
        // Create the rating
        $rating = Rating::create($request->all());
        // Optionally log the created rating or perform additional actions
        Log::info('Rating created:', $rating->toArray());
        return redirect()->route('ratings.index')->with('success', 'Rating created successfully.');
    }
    public function show($id)
    {
        // Logic to retrieve and display a specific rating
        $rating = Rating::findOrFail($id);
        return view('ratings.show', compact('rating'));
    }
    public function edit($id)
    {
        // Logic to show the form for editing a specific rating
        $rating = Rating::findOrFail($id);
        return view('ratings.edit', compact('rating'));
    }
    public function update(Request $request, $id)
    {
        // Logic to validate and update a specific rating
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'project_id' => 'required|exists:projects,id',
            'client_name' => 'nullable|string|max:255',
            'business_name' => 'nullable|string|max:255',
            'client_photo' => 'nullable|image|max:2048',
            'business_photo' => 'nullable|image|max:2048',
            'project_name' => 'nullable|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string|max:1000',
        ]);
        // Handle file uploads for client_photo and business_photo
        if ($request->hasFile('client_photo')) {
            $clientPhotoPath = $request->file('client_photo')->store('photos', 'public');
            $request->merge(['client_photo' => $clientPhotoPath]);
        }
        if ($request->hasFile('business_photo')) {
            $businessPhotoPath = $request->file('business_photo')->store('photos', 'public');
            $request->merge(['business_photo' => $businessPhotoPath]);
        }
        // Update the rating
        $rating = Rating::findOrFail($id);
        $rating->update($request->all());
        // Optionally log the updated rating or perform additional actions
        Log::info('Rating updated:', $rating->toArray());
        return redirect()->route('ratings.index')->with('success', 'Rating updated successfully.');
    }
    public function destroy($id)
    {
        // Logic to delete a specific rating
        $rating = Rating::findOrFail($id);
        $rating->delete();
        // Optionally log the deleted rating or perform additional actions
        Log::info('Rating deleted:', ['id' => $id]);
        return redirect()->route('ratings.index')->with('success', 'Rating deleted successfully.');
    }
}
