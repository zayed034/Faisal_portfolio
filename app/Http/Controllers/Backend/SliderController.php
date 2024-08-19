<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        return view('backend.slider', compact('sliders'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'background_image' => 'required|image',
            'digital_marketing' => 'required|string|max:255',
            'seo_expert' => 'required|string|max:255',
            'wordpress' => 'required|string|max:255',
            'resume' => 'required|file'
        ]);

        $backgroundImagePath = $request->file('background_image')->store('public/sliders');
        $resumePath = $request->file('resume')->store('public/resumes');

        Slider::create([
            'background_image' => $backgroundImagePath,
            'digital_marketing' => $request->digital_marketing,
            'seo_expert' => $request->seo_expert,
            'wordpress' => $request->wordpress,
            'resume' => $resumePath
        ]);

        return redirect()->route('admin.slider.index');
    }

    public function edit(Slider $slider)
    {
        return view('backend.edit-slider', compact('slider'));
    }

    public function update(Request $request, Slider $slider)
    {
        $request->validate([
            'background_image' => 'image',
            'digital_marketing' => 'required|string|max:255',
            'seo_expert' => 'required|string|max:255',
            'wordpress' => 'required|string|max:255',
            'resume' => 'file'
        ]);

        if ($request->hasFile('background_image')) {
            $backgroundImagePath = $request->file('background_image')->store('public/sliders');
            $slider->background_image = $backgroundImagePath;
        }

        if ($request->hasFile('resume')) {
            $resumePath = $request->file('resume')->store('public/resumes');
            $slider->resume = $resumePath;
        }

        $slider->update([
            'digital_marketing' => $request->digital_marketing,
            'seo_expert' => $request->seo_expert,
            'wordpress' => $request->wordpress
        ]);

        return redirect()->route('admin.slider.index');
    }

    public function destroy(Slider $slider)
    {
        $slider->delete();
        return redirect()->route('admin.slider.index');
    }
}
