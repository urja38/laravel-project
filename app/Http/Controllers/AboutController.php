<?php

namespace App\Http\Controllers;
use app\Http\Controllers\AboutController;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $abouts = About::all();
        return view('about.index', compact('abouts'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('about.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image',
            'about_our_company' => 'required',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        About::create([
            'image' => $imageName,
            'about_our_company' => $request->about_our_company,
        ]);

        return redirect()->route('about.index')->with('success', 'About information created successfully.');
    }

    // Display the specified resource.
    public function show(About $about)
    {
        return view('about.show', compact('about'));
    }

    // Show the form for editing the specified resource.
    public function edit(About $about)
    {
        return view('about.edit', compact('about'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, About $about)
    {
        $request->validate([
            'image' => 'image',
            'about_our_company' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $about->image = $imageName;
        }

        $about->about_our_company = $request->about_our_company;
        $about->save();

        return redirect()->route('about.index')->with('success', 'About information updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy(About $about)
    {
        $about->delete();
        return redirect()->route('about.index')->with('success', 'About information deleted successfully.');
    }
}

