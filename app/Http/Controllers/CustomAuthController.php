<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Auth\Events\Failed;
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
    public function signupsave(Request $request)
    {
      
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        
        $data = $request->all();
        dd();
        $check = $this->create($data);

        return redirect("/");
    }
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'email_verified_at' => null,
         'role' => 0,
        'password' => $data['password']
      ]);
    //   Hash::make($data['password'])
    }

     public function signin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $fetchUsers = User::all();
        foreach($fetchUsers as $fetchUser){
            if($fetchUser->email  == $request->email && $fetchUser->password  == $request->password){
                $user = User::find($fetchUser->id);
                session(['user' => $user]);
                return redirect('/');
            }
            // echo ($user->password  == "Zohde123"). "<br>";
        }
        return redirect('login');
    }

    // public function dashboard()
    // {
    //     if(Auth::check()){
    //         if(Auth::user()->role == 1){
    //             return redirect('activity');
    //         } 
    //         return redirect('/');
    //     }
    //     return redirect('/login');
    // }

    public function signOut() {
        session()->flush();
        return redirect('login');
    }

}
