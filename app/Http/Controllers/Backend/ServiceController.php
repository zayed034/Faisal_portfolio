<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('backend.service', compact('services'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'servicename' => 'required',
            'description' => 'required',
        ]);

        Service::create([
            'service_name' => $request->servicename,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'Service created successfully.');
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('backend.edit-service', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'servicename' => 'required',
            'description' => 'required',
        ]);

        $service = Service::findOrFail($id);
        $service->update([
            'service_name' => $request->servicename,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.service.index')->with('success', 'Service updated successfully.');
    }

    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();

        return redirect()->route('admin.service.index')->with('success', 'Service deleted successfully.');
    }
}

