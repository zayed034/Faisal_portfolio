<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('backend.portfolio-m', compact('portfolios'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'subject' => 'required|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('backend/img'), $imageName);
        }

        Portfolio::create([
            'title' => $validatedData['title'],
            'subject' => $validatedData['subject'],
            'image' => $imageName,
        ]);

        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio created successfully');
    }

    public function edit($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        return view('backend.edit-portfolio', compact('portfolio'));
    }

    public function update(Request $request, $id)
    {
        $portfolio = Portfolio::findOrFail($id);

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'subject' => 'required|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = $portfolio->image;
        if ($request->hasFile('image')) {
            if ($imageName) {
                unlink(public_path('backend/img') . '/' . $imageName);
            }
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('backend/img'), $imageName);
        }

        $portfolio->update([
            'title' => $validatedData['title'],
            'subject' => $validatedData['subject'],
            'image' => $imageName,
        ]);

        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio updated successfully');
    }

    public function destroy($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        if ($portfolio->image) {
            unlink(public_path('backend/img') . '/' . $portfolio->image);
        }
        $portfolio->delete();

        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio deleted successfully');
    }
}
