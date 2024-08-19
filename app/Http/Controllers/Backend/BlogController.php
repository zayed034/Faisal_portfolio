<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('backend.blog', compact('blogs'));
    }

    public function create()
    {
        return view('backend.blog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'subject' => 'required',
            'image' => 'required|image',
            'title' => 'required',
            'description' => 'required',
        ]);

        $imagePath = $request->file('image')->store('blogs', 'public');

        Blog::create([
            'subject' => $request->subject,
            'image' => $imagePath,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.blog.index')->with('success', 'Blog created successfully.');
    }

    
    public function edit(Blog $blog)
    {
        return view('backend.blog.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'subject' => 'required',
            'image' => 'sometimes|image',
            'title' => 'required',
            'description' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blogs', 'public');
            $blog->update(['image' => $imagePath]);
        }

        $blog->update([
            'subject' => $request->subject,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.blog.index')->with('success', 'Blog updated successfully.');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('admin.blog.index')->with('success', 'Blog deleted successfully.');
    }
}
