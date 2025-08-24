<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Models\ContactForm; // Import your ContactForm model

    class ContactFormController extends Controller
    {
        public function create()
        {
            return view('contact.form'); 
            // Assuming your form view is in resources/views/contact/form.blade.php
        }

        public function store(Request $request)
        {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'subject' => 'nullable|string|max:255',
                'message' => 'required|string',
            ]);

            ContactForm::create($request->all());

            return back()->with('success', 'Your message has been sent!');
        }
    }