<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        $skills = Skill::all();
        return view('backend.skill', compact('skills'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'skill_name' => 'required|string|max:255',
            'percentage' => 'required|integer|min:0|max:100',
        ]);

        Skill::create($request->all());
        return redirect()->route('admin.skill.index')->with('success', 'Skill added successfully.');
    }

    public function edit(Skill $skill)
    {
        return view('backend.edit-skill', compact('skill'));
    }

    public function update(Request $request, Skill $skill)
    {
        $request->validate([
            'skill_name' => 'required|string|max:255',
            'percentage' => 'required|integer|min:0|max:100',
        ]);

        $skill->update($request->all());
        return redirect()->route('admin.skill.index')->with('success', 'Skill updated successfully.');
    }

    public function destroy(Skill $skill)
    {
        $skill->delete();
        return redirect()->route('admin.skill.index')->with('success', 'Skill deleted successfully.');
    }
}
