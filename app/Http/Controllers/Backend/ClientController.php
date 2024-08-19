<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ClientReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    public function index()
    {
        $reviews = ClientReview::all();
        return view('backend.port-client-re', compact('reviews'));
    }

    public function create()
    {
        return view('backend.create-client-review');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imagePath = $request->file('image') ? $request->file('image')->store('public/backend/img') : null;

        ClientReview::create([
            'name' => $request->name,
            'designation' => $request->designation,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.port-client-re.index')->with('success', 'Client review added successfully');
    }

    public function edit(ClientReview $clientReview)
    {
        return view('backend.edit-client-review', compact('clientReview'));
    }

    public function update(Request $request, ClientReview $clientReview)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imagePath = $request->file('image') ? $request->file('image')->store('public/backend/img') : $clientReview->image;

        $clientReview->update([
            'name' => $request->name,
            'designation' => $request->designation,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.port-client-re.index')->with('success', 'Client review updated successfully');
    }

    public function destroy(ClientReview $clientReview)
    {
        if ($clientReview->image) {
            Storage::delete($clientReview->image);
        }
        $clientReview->delete();
        return redirect()->route('admin.port-client-re.index')->with('success', 'Client review deleted successfully');
    }
}


