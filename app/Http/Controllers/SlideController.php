<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    // Index method to show all slides in the backend
    public function index()
    {
        $slides = Slide::all();
        return view('slides.index', compact('slides'));
    }

    // Create method to show form for creating a new slide
    public function create()
    {
        return view('slides.create');
    }

    // Store method to save new slide to the database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'caption' => 'required',
            'description' => 'nullable',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/slides', $imageName);
            $validatedData['image'] = 'slides/' . $imageName;
        }

        Slide::create($validatedData);

        return redirect()->route('slides.index')
            ->with('success', 'Slide created successfully.');
    }

    // Edit method to show form for editing a slide
    public function edit(Slide $slide)
    {
        return view('slides.edit', compact('slide'));
    }

    // Update method to save edited slide to the database
    public function update(Request $request, Slide $slide)
    {
        $validatedData = $request->validate([
            'caption' => 'required',
            'description' => 'nullable',
        ]);

        // Handle image update
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/slides', $imageName);
            $validatedData['image'] = 'slides/' . $imageName;
        }

        $slide->update($validatedData);

        return redirect()->route('slides.index')
            ->with('success', 'Slide updated successfully.');
    }

    // Destroy method to delete a slide
    public function destroy(Slide $slide)
    {
        $slide->delete();

        return redirect()->route('slides.index')
            ->with('success', 'Slide deleted successfully.');
    }

    // Method to show slides in frontend slider
    public function showSlider()
    {
        $slides = Slide::all();
        //  dd($slides); 
        return view('frontend.slider', compact('slides'));
    }

    
}
