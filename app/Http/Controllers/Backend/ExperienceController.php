<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ExperienceController extends Controller
{
    public function index()
    {
        $experiences = Experience::all();
        return view('backend.experience', compact('experiences'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'designation' => 'required|string|max:255',
            'companyname' => 'required|string|max:255',
            'description' => 'required|string',
            'file' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $experience = new Experience();
        $experience->joining_date = $request->date;
        $experience->designation = $request->designation;
        $experience->company_name = $request->companyname;
        $experience->description = $request->description;

        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('public/experiences');
            $experience->image = basename($path);
        }

        $experience->save();

        return redirect()->route('admin.experience.index');
    }

    public function edit(Experience $experience)
    {
        return view('backend.edit-experience', compact('experience'));
    }

    public function update(Request $request, Experience $experience)
    {
        $request->validate([
            'date' => 'required|date',
            'designation' => 'required|string|max:255',
            'companyname' => 'required|string|max:255',
            'description' => 'required|string',
            'file' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $experience->joining_date = $request->date;
        $experience->designation = $request->designation;
        $experience->company_name = $request->companyname;
        $experience->description = $request->description;

        if ($request->hasFile('file')) {
            // Delete old image if it exists
            if ($experience->image) {
                Storage::delete('public/experiences/' . $experience->image);
            }
            $path = $request->file('file')->store('public/experiences');
            $experience->image = basename($path);
        }

        $experience->save();

        return redirect()->route('admin.experience.index');
    }

    public function destroy(Experience $experience)
    {
        if ($experience->image) {
            Storage::delete('public/experiences/' . $experience->image);
        }
        $experience->delete();
        return redirect()->route('admin.experience.index');
    }
}

