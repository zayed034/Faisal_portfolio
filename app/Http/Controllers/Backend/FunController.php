<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\FunFact;
use Illuminate\Http\Request;

class FunController extends Controller
{
    public function index() {
        $funFacts = FunFact::paginate(10);
        return view('backend.fun', compact('funFacts'));
    }

    public function store(Request $request) {
        $request->validate([
            'number' => 'required',
            'subject' => 'required'
        ]);

        FunFact::create($request->all());

        return redirect()->route('admin.fun.index')->with('success', 'Fun Fact created successfully.');
    }

    public function edit($id) {
        $funFact = FunFact::findOrFail($id);
        return view('backend.edit-fun', compact('funFact'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'number' => 'required',
            'subject' => 'required'
        ]);

        $funFact = FunFact::findOrFail($id);
        $funFact->update($request->all());

        return redirect()->route('admin.fun.index')->with('success', 'Fun Fact updated successfully.');
    }

    public function destroy($id) {
        FunFact::destroy($id);
        return redirect()->route('admin.fun.index')->with('success', 'Fun Fact deleted successfully.');
    }
}
