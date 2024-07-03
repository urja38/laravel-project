<?php

namespace App\Http\Controllers;
use app\Http\Controllers\formController;
use App\Models\form;


use Illuminate\Http\Request;

class formController extends Controller
{
    public function index()
    {
        return view('form.index');
    }

    public function ajaxList(){
        $forms = form::all();
        return view('form.list', compact('forms'));
    }

    public function create()
    {
        return view('form.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
        ]);


        Form::create($request->all());

        return response()->json(['success => true']);
    }

    public function show(form $form)
    {
        return view('form.index', compact('form'));
    }

    public function edit(string $id)
    {
        $forms = form::find($id);

        return view('form.edit', compact('forms'));
    }

    public function update(Request $request, $id)
    {
        $form = Form::find($id);
    
        if ($form) {
            $form->first_name = $request->input('first_name');
            $form->last_name = $request->input('last_name');
            $form->email = $request->input('email');
            $form->contact_number = $request->input('contact_number');
            $form->save();
    
            return response()->json(['success' => true, 'form' => $form]);
        }
    
        return response()->json(['success' => false]);
    }
    

    public function destroy(string $id)
    {
        $form = Form::find($id);

        $form->delete();
        return response()->json(['success' => true]);

    }

}
