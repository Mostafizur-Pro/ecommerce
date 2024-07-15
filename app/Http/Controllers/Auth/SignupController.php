<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class SignupController extends Controller
{
    public function showSignupForm()
    {
        return view('auth.signup');
    }

    public function signup(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'number' => ['required', 'string', 'max:11'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);



        $user = User::create([
            'name' => $request['name'],
            'number' => $request['number'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        Auth::login($user);
        // dd($user);
        if ($user) {
            return redirect('login')->with('Success', 'User Registration successful! Please login.');
        }
    }

    // protected function validator(array $data)
    // {

    //     return Validator::make($data, [

    //         'name' => ['required', 'string', 'max:255'],
    //         'number' => ['required', 'string', 'max:11'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'string', 'min:8', 'confirmed'],
    //     ]);
    // }
    // protected function create(array $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'number' => $data['number'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //     ]);
    // }
}
