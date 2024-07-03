<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EmailRequest;
use App\Models\Email;

class EmailController extends Controller
{
    public function showSubmitForm()
    {
        return view('index');
    }

    public function submitEmail(EmailRequest $request)
    {
        // The request is already validated at this point
        $email = new Email();
        $email->email = $request->email;
        $email->save();

        return redirect()->route('email.form')->with('success', 'Email submitted successfully!');
    }

    public function showEmails()
    {
        $emails = Email::all();
        return view('emails', compact('emails'));
    }

    public function deleteEmail($id)
    {
        $email = Email::findOrFail($id);
        $email->delete();

        return redirect()->route('emails')->with('success', 'Email deleted successfully');
    }
}
