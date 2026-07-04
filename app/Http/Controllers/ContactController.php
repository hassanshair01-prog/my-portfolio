<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required|max:100',
            'email' => 'required|email',
            'phone' => 'nullable|max:20',
            'subject' => 'nullable|max:150',
            'message' => 'required|min:5',

        ]);

        ContactMessage::create([

            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,

        ]);

        return back()->with('success','Your message has been sent successfully.');
    }
    public function destroy($id)
{
    ContactMessage::findOrFail($id)->delete();

    return redirect()->route('admin.dashboard')
                     ->with('success', 'Message deleted successfully.');
}
}