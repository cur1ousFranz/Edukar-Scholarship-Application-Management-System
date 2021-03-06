<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\School;
use App\Models\Address;
use App\Models\Contact;
use App\Models\Applicant;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Notifiable;

class UserController extends Controller
{

    use Notifiable;

    /**
     * Create account of applicant
     */
    public function createAccount(Request $request){

        $formFields = $request->validate([
            'username' => ['required', Rule::unique('users', 'username')],
            'email' => ['required', 'email', Rule::unique('contacts', 'email')],
            'password' => ['required', 'confirmed', 'min:6']
        ]);

        $user = User::create([
            'username' => $formFields['username'],
            'password' => bcrypt($formFields['password']),
            'role' => 'applicant'
        ]);

        $applicant = Applicant::create([
            'users_id' => $user->id
        ]);

        Contact::create([
            'email' => $formFields['email'],
            'applicants_id' => $applicant->id
        ]);

        Address::create([
            'applicants_id' => $applicant->id
        ]);

        School::create([
            'applicants_id' => $applicant->id
        ]);

        return back()->with('success', 'Created account succesfully!');
    }

    public function login(Request $request){

        $formFields = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = DB::table('users')->where('username', $formFields['username'])->first();

        // Check if the user is a teacher
        if(Auth::attempt($formFields)){
            if($user->role == "applicant"){
                $request->session()->regenerate();
                return redirect('/')->with('success', 'You logged in!');
            }
        }

        // Check if the user is a student
        if(Auth::attempt($formFields)){
            if($user->role == "coordinator"){
                $request->session()->regenerate();
                return redirect('/dashboard')->with('success', 'You logged in!');
            }

        }

        return back()->with('error', 'Invalid Credentials!');
    }

    /**
     * Logout the logged in user
     */
    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
