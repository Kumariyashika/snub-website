<?php

namespace App\Http\Controllers;

use App\Models\ContactInquiry;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function show(): View
    {
        return view('contact');
    }

    public function submit(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:150',
            'email' => 'required|email|max:200',
            'phone' => 'required|string|max:30',
            'inquiry_type' => 'required|string|in:Retail/Wholesale,Media/Press,General Questions,Collaboration Idea',
            'message' => 'required|string|max:3000',
        ], [
            'name.required' => 'Please enter your name.',
            'email.required' => 'Please provide a valid email address.',
            'phone.required' => 'Please enter your phone number.',
            'inquiry_type.required' => 'Please select an inquiry type.',
            'inquiry_type.in' => 'Please choose a valid inquiry option.',
            'message.required' => 'Please write your message.',
        ]);

        ContactInquiry::create($validated);

        return redirect()->route('contact')->with('success', "Thank you, {$validated['name']}! Your inquiry has been received. Our team will get back to you within 1–2 business days.");
    }
}
