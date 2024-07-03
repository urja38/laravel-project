<?php

namespace App\Http\Controllers;
use app\Http\Controllers\AddblogController;

use App\Models\Addblog;
use Illuminate\Http\Request;

class AddblogController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $blogs = Addblog::all();
        return view('addblog.index', compact('blogs'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('addblog.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image',
            'description' => 'required',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        Addblog::create([
            'title' => $request->title,
            'image' => $imageName,
            'description' => $request->description,
        ]);

        return redirect()->route('addblog.index')->with('success', 'Blog created successfully.');
    }

    // Display the specified resource.
    public function show(Addblog $addblog)
    {
        return view('addblog.show', compact('addblog'));
    }

    // Show the form for editing the specified resource.
    public function edit(Addblog $addblog)
    {
        return view('addblog.edit', compact('addblog'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, Addblog $addblog)
    {
        $request->validate([
            'title' => 'required|max:255',
            'image' => 'image',
            'description' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $addblog->image = $imageName;
        }

        $addblog->title = $request->title;
        $addblog->description = $request->description;
        $addblog->save();

        return redirect()->route('addblog.index')->with('success', 'Blog updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy(Addblog $addblog)
    {
        $addblog->delete();
        return redirect()->route('addblog.index')->with('success', 'Blog deleted successfully.');
    }
}
