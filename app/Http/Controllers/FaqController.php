<?php

namespace App\Http\Controllers;
use app\Http\Controllers\FaqController;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $faqs = Faq::all();
        return view('faq.index', compact('faqs'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('faq.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);

        Faq::create($request->all());

        return redirect()->route('faq.index')->with('success', 'FAQ created successfully.');
    }

    // Display the specified resource.
    public function show(Faq $faq)
    {
        return view('faq.show', compact('faq'));
    }

    // Show the form for editing the specified resource.
    public function edit(Faq $faq)
    {
        return view('faq.edit', compact('faq'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, Faq $faq)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);

        $faq->update($request->all());

        return redirect()->route('faq.index')->with('success', 'FAQ updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy(Faq $faq)
    {
        $faq->delete();
        return redirect()->route('faq.index')->with('success', 'FAQ deleted successfully.');
    }
}

