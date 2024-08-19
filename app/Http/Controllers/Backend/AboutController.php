<?php

// app/Http/Controllers/Backend/AboutController.php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::all();
        return view('backend.about', compact('abouts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $about = new About;
        $about->title = $request->title;
        $about->description = $request->description;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('backend/img', 'public');
            $about->image = $imagePath;
        }

        $about->save();

        return redirect()->route('admin.about');
    }

    public function edit(About $about)
    {
        return view('backend.edit-about', compact('about'));
    }

    public function update(Request $request, About $about)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $about->title = $request->title;
        $about->description = $request->description;

        if ($request->hasFile('image')) {
            if ($about->image) {
                Storage::disk('public')->delete($about->image);
            }
            $imagePath = $request->file('image')->store('backend/img', 'public');
            $about->image = $imagePath;
        }

        $about->save();

        return redirect()->route('admin.about');
    }

    public function destroy(About $about)
    {
        if ($about->image) {
            Storage::disk('public')->delete($about->image);
        }
        $about->delete();
        return redirect()->route('admin.about');
    }
}
