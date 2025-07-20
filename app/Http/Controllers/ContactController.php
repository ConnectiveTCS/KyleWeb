<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    // Add methods for handling contact form submissions, viewing contacts, etc.
    public function index()
    {
                // Logic to retrieve and display contacts
        $contacts = \App\Models\Contact::all();
        return view('contacts.index', compact('contacts'));
    }
    public function create()
    {
        // Logic to show the contact form
        return view('contacts.create');
    }
    public function store(Request $request)
    {
        // Validate and store the contact form submission
        $request->validate([
            'name' => 'nullable|string|max:255',
            'email' => 'required|email|unique:contacts,email',
            'phone' => 'nullable|string|max:20',
            'message' => 'nullable|string',
            'status' => 'in:new,in_progress,resolved',
            'contacted_at' => 'nullable|date',
        ]);
        \App\Models\Contact::create($request->all());
        return redirect()->route('contacts.index')->with('success', 'Contact created successfully.');
    }
    public function show($id)
    {
        // Logic to show a single contact
        $contact = \App\Models\Contact::findOrFail($id);
        return view('contacts.show', compact('contact'));
    }
    public function edit($id)
    {
        // Logic to show the edit form for a contact
        $contact = \App\Models\Contact::findOrFail($id);
        return view('contacts.edit', compact('contact'));
    }
    public function update(Request $request, $id)
    {
        // Validate and update the contact
        $request->validate([
            'name' => 'nullable|string|max:255',
            'email' => 'required|email|unique:contacts,email,' . $id,
            'phone' => 'nullable|string|max:20',
            'message' => 'nullable|string',
            'status' => 'in:new,in_progress,resolved',
            'contacted_at' => 'nullable|date',
        ]);
        $contact = \App\Models\Contact::findOrFail($id);
        $contact->update($request->all());
        return redirect()->route('contacts.index')->with('success', 'Contact updated successfully.');
    }
    public function destroy($id)
    {
        // Logic to delete a contact
        $contact = \App\Models\Contact::findOrFail($id);
        $contact->delete();
        return redirect()->route('contacts.index')->with('success', 'Contact deleted successfully.');
    }
}
