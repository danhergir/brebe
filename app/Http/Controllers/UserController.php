<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Mail;

use Illuminate\Support\Str;
use App\Models\EconomicalActivity;
use App\Models\Bank;
use App\Mail\ValidationMail;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function register(Request $request) {
        $user = Session::get('user_data', []);
        $economical_activities = EconomicalActivity::all();

        return view('register.index', compact('user', 'economical_activities'));
    }

    public function submitForm1(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|unique:users,phone|regex:/^([0-9\s\-\+\(\)]*)$/',
            'type_id' => 'required|string|max:255',
            'document_number' => 'required|numeric|unique:users,document_number',
            'email' => 'required|email|max:255|unique:users,email',
            'birthdate' => 'required|string|max:255',
            'economical_activity' => 'required|string|max:255',
        ]);

        return $this->validateData(1, $validated);
    }

    public function registerStep2(Request $request) {
        $user = Session::get('user_data', []);

        $departments = [
            "Amazonas",
            "Antioquia",
            "Arauca",
            "Atlántico",
            "Bolívar",
            "Boyacá",
            "Caldas",
            "Caquetá",
            "Casanare",
            "Cauca",
            "Cesar",
            "Chocó",
            "Córdoba",
            "Cundinamarca",
            "Guainía",
            "Guaviare",
            "Huila",
            "La Guajira",
            "Magdalena",
            "Meta",
            "Nariño",
            "Norte de Santander",
            "Putumayo",
            "Quindío",
            "Risaralda",
            "San Andrés and Providencia",
            "Santander",
            "Sucre",
            "Tolima",
            "Valle del Cauca",
            "Vaupés",
            "Vichada"
        ];

        if(empty($user)) {
            return redirect()->route('user.register');
        }

        return view('register.2-form', compact('user', 'departments'));
    }

    public function submitForm2(Request $request)
    {
        $validated = $request->validate([
            'country' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'zipcode' => 'required|numeric',
            'company_email' => 'required|email|max:255|unique:users,email',
            'company_phone' => 'required|numeric',
        ]);

        return $this->validateData(2, $validated);
    }

    public function registerStep3(Request $request) {
        $banks = Bank::all();
        $user = Session::get('user_data', []);

        if(empty($user)) {
            return redirect()->route('user.register');
        }

        return view('register.3-form', compact('user', 'banks'));
    }

    public function submitForm3(Request $request) {
        $validated = $request->validate([
            'bank_name' => 'required|string|max:15',
            'account_type' => 'required|string|max:255',
            'account_number' => 'required|numeric',
            'document_type' => 'required|string|max:255',
            'document_number_bank' => 'required|numeric',
        ]);

        return $this->validateData(3, $validated);
    }

    public function registerStep4(Request $request) {
        $user = Session::get('user_data', []);

        if(empty($user)) {
            return redirect()->route('user.register');
        }

        return view('register.4-form', compact('user'));
    }

    public function submitForm4(Request $request) {
        $validated = $request->validate([
            'product_description' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'instagram' => 'string|nullable|max:255',
            'website' => 'string|nullable|url|max:255',
            'facebook' => 'string|nullable|url|max:255',
            'linkedin' => 'string|nullable|url|max:255',
            'whatsapp_business' => 'string|nullable|max:255',
        ]);

        return $this->validateData(4, $validated);
    }

    public function validateData($step, $validated) {
        if($step == 1) {
            Session::put('user_data', array_merge(Session::get('user_data', []), $validated));
        } else {
            $userData = Session::get('user_data', []);
        
            $userData = array_merge($userData, $validated);
    
            Session::put('user_data', $userData);    
        }

        return redirect()->route('user.register-'.$step+1)->with('success', 'Datos guardados!');
    }

    // Validate user via email and register account

    public function registerStep5(Request $request) {
        $user = Session::get('user_data', []);

        if(empty($user)) {
            return redirect()->route('user.register');
        }

        return view('register.5-form', compact('user'));
    }

    public function submitForm5(Request $request) {
        $validated = $request->validate([
            'product_description' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'instagram' => 'string|nullable|max:255',
            'website' => 'string|nullable|url|max:255',
            'facebook' => 'string|nullable|url|max:255',
            'linkedin' => 'string|nullable|url|max:255',
            'whatsapp_business' => 'string|nullable|max:255',
        ]);

        // return $this->validateData(4, $validated);
        return 'Account created';
    }

    public function sendValidation() {
        $user = Session::get('user_data');
        $code = str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);
    

        Mail::to($user['email'])->send(new ValidationMail([
            'title' => 'Validando tu correo con Brebe',
            'name' => $user['name'],
            'body' => 'Estamos validando tu correo con Brebe',
            'code' => str_split($code) // Passing the code as an array
        ]));

    }

}
