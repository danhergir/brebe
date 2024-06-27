<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function register(Request $request) {
        $user = $request->session()->get('user_data', []);
        return view('register.index', compact('user'));
    }

    public function submitForm1(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|unique:users,phone', 'regex:/^([0-9\s\-\+\(\)]*)$/',
            'type_id' => 'required|string|max:255',
            'document_number' => 'required|numeric|unique:users,document_number',
            'email' => 'required|email|max:255|unique:users,email',
            'birthdate' => 'required|string|max:255',
            'economical_activity' => 'required|string|max:255',
        ]);

        // Store the validated data in the session
        $request->session()->put('user_data', array_merge($request->session()->get('user_data', []), $validated));

        // Return a response, such as redirecting to another page or showing a success message
        return redirect()->route('user.register-2')->with('success', 'Datos guardados!');
    }

    public function registerStep2(Request $request) {
        $user = $request->session()->get('user_data', []);
        return view('register.2-form', compact('user'));
    }

    public function submitForm2(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'country' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'zipcode' => 'required|numeric',
            'company_email' => 'required|email|max:255|unique:users,email',
            'company_phone' => 'required|numeric',
        ]);

        // Retrieve existing session data and merge with new data
        $userData = $request->session()->get('user_data', []);
        $userData = array_merge($userData, $validated);
        $request->session()->put('user_data', $userData);

        return redirect()->route('user.register-3')->with('success', 'Datos guardados!');
    }

    public function registerStep3(Request $request) {
        $user = $request->session()->get('user_data', []);

        return view('register.3-form', compact('user'));
    }

    public function submitForm3(Request $request) {
        $validated = $request->validate([
            'bank_name' => 'required|string|max:15',
            'account_type' => 'required|string|max:255',
            'account_number' => 'required|numeric',
            'document_type' => 'required|string|max:255',
            'document_number_bank' => 'required|numeric',
        ]);

        // Retrieve existing session data and merge with new data
        $userData = $request->session()->get('user_data', []);
        $userData = array_merge($userData, $validated);
        $request->session()->put('user_data', $userData);

        return redirect()->route('user.register-4')->with('success', 'Datos guardados!');
    }

    public function registerStep4() {
        return view('register.4-form');
    }
}
