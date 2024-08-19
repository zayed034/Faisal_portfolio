<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('backend.contact-page', compact('contacts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'address' => 'required',
            'email' => 'required|email',
            'number' => 'required',
        ]);

        Contact::create($request->all());
        return redirect()->route('admin.contact-page')->with('success', 'Contact created successfully.');
    }

    public function edit(Contact $contact)
    {
        return view('backend.edit-contact', compact('contact'));
    }

    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'address' => 'required',
            'email' => 'required|email',
            'number' => 'required',
        ]);

        $contact->update($request->all());
        return redirect()->route('admin.contact-page')->with('success', 'Contact updated successfully.');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('admin.contact-page')->with('success', 'Contact deleted successfully.');
    }
}
