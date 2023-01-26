<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class CustomAuthController extends Controller
{
    public function home()
    {
        return view('landing');
    }

    public function login()
    {
        return view('login-register');
    }
    public function event()
    {
        return view('role.index');
    }
    public function show()
    {
        return view('role.show');
    }

    public function signin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->with('message', 'Signed in!');
        }

        return redirect('/login')->with('message', 'Login details are not valid!');
    }
    public function signupsave(Request $request)
    {
      
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("/");
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }


    public function dashboard()
    {
        if(Auth::check()){
            if(Auth::user()->role == 1){
                return view('dashboard');
            } 
            return redirect('/');
        }
        return redirect('/login');
    }

    public function signOut() {
        Session::flush();
        Auth::logout();

        return redirect('login');
    }

}
