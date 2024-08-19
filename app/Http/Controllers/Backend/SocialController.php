<?php

// app/Http/Controllers/Backend/SocialController.php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SocialMedia; // Import the model
use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function index()
    {
        $socials = SocialMedia::all();
        return view('backend.social-media', compact('socials'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'facebook' => 'nullable|string|max:255',
            'twitter' => 'nullable|string|max:255',
            'youtube' => 'nullable|string|max:255',
            'linkedin' => 'nullable|string|max:255',
        ]);

        SocialMedia::create($data);

        return redirect()->back()->with('success', 'Social media links added successfully.');
    }

    public function edit(SocialMedia $socialMedia)
    {
        return view('backend.edit-social-media', compact('socialMedia'));
    }

    public function update(Request $request, SocialMedia $socialMedia)
    {
        $data = $request->validate([
            'facebook' => 'nullable|string|max:255',
            'twitter' => 'nullable|string|max:255',
            'youtube' => 'nullable|string|max:255',
            'linkedin' => 'nullable|string|max:255',
        ]);

        $socialMedia->update($data);

        return redirect()->route('admin.social-media')->with('success', 'Social media links updated successfully.');
    }

    public function destroy(SocialMedia $socialMedia)
    {
        $socialMedia->delete();
        return redirect()->route('admin.social-media')->with('success', 'Social media links deleted successfully.');
    }
}


