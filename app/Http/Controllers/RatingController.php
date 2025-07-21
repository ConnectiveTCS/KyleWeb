<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class RatingController extends Controller
{
    //
    // This controller will handle the logic for managing ratings
    // such as creating, updating, deleting, and retrieving ratings.
    public function index()
    {
        // Logic to retrieve and display all ratings
        $ratings = Rating::all();
        return view('admin.ratings.index', compact('ratings'));
    }
    public function create()
    {
        // Logic to show the form for creating a new rating
        return view('admin.ratings.create');
    }
    public function store(Request $request)
    {
        // Logic to validate and store a new rating
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'project_id' => 'required|exists:projects,id',
            'client_name' => 'nullable|string|max:255',
            'business_name' => 'nullable|string|max:255',
            'client_photo' => 'nullable|file|image|max:2048',
            'business_photo' => 'nullable|file|image|max:2048',
            'project_name' => 'nullable|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string|max:1000',
        ]);
        // Handle file uploads for client_photo and business_photo
        if ($request->hasFile('client_photo')) {
            $path = $request->file('client_photo')->store('photos', 'public');
            $data['client_photo'] = $path;
            Log::info('Client photo stored at: ' . $path);
        }
        if ($request->hasFile('business_photo')) {
            $path2 = $request->file('business_photo')->store('photos', 'public');
            $data['business_photo'] = $path2;
            Log::info('Business photo stored at: ' . $path2);
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
        return view('admin.ratings.show', compact('rating'));
    }
    public function edit($id)
    {
        // Logic to show the form for editing a specific rating
        $rating = Rating::findOrFail($id);
        return view('admin.ratings.edit', compact('rating'));
    }
    public function update(Request $request, $id)
    {
        // Logic to validate and update a specific rating
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'project_id' => 'required|exists:projects,id',
            'client_name' => 'nullable|string|max:255',
            'business_name' => 'nullable|string|max:255',
            'client_photo' => 'nullable|file|image|max:2048',
            'business_photo' => 'nullable|file|image|max:2048',
            'project_name' => 'nullable|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string|max:1000',
        ]);
        // Update the rating
        $rating = Rating::findOrFail($id);
        $data = $request->except(['client_photo', 'business_photo']);
        // Handle client logo upload
        if ($request->hasFile('client_photo')) {
            // Delete old logo if exists
            if ($rating->client_photo) {
                Storage::disk('public')->delete($rating->client_photo);
            }

            $path = $request->file('client_photo')->store('logos', 'public');
            $data['client_photo'] = $path;
            Log::info('Client photo updated at: ' . $path);
        }
        if ($request->hasFile('business_photo')) {
            // Delete old logo if exists
            if ($rating->business_photo) {
                Storage::disk('public')->delete($rating->business_photo);
            }

            $path = $request->file('business_photo')->store('logos', 'public');
            $data['business_photo'] = $path;
            Log::info('Business photo updated at: ' . $path);
        }
        $rating->update($data);
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
