<?php

namespace App\Http\Controllers;

use \App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    // Add methods for handling contact form submissions, viewing contacts, etc.
    public function index()
    {
        // Logic to retrieve and display contacts
        $contacts = Contact::all();
        return view('dashboard', compact('contacts'));
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
        Contact::create($request->all());
        // Optionally send an email notification
        Mail::to('sales@acewebdesign.co.za')->send(new \App\Mail\Contact());
        return redirect()->route('dashboard')->with('success', 'Contact created successfully.');
    }

    public function show($id)
    {
        // Logic to show a single contact
        $contact = Contact::findOrFail($id);
        return view('contacts.show', compact('contact'));
    }

    public function edit($id)
    {
        // Logic to show the edit form for a contact
        $contact = Contact::findOrFail($id);
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
        $contact = Contact::findOrFail($id);
        $contact->update($request->all());
        return redirect()->route('dashboard')->with('success', 'Contact updated successfully.');
    }

    public function destroy($id)
    {
        // Logic to delete a contact
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect()->route('dashboard')->with('success', 'Contact deleted successfully.');
    }
}
