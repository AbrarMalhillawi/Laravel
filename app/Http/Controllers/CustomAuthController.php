<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Illuminate\Auth\Events\Failed;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Event;
use App\Models\Book;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Termwind\Components\Dd;

class CustomAuthController extends Controller
{
    public function home()
    {
        return view('landing');
    }
    public function login()
    {   
        return view('login');
    }
    public function register()
    {   
        return view('register');
    }
    public function userProfile()
    {   

        if(!session('user')){
            return redirect('login');
        }
        $books = book::all();
        $book= Book::find(2);
        $res = [];
        foreach($books as $book){
           $arr2= ['user_name' => User::find($book->user_id)->name, 'event_name' => Event::find($book->event_id)->name, "hours" => $book->hours, 'date' => $book->date, 'status' => $book->status,'id'=> $book->id];
          if(session('user')->id == $book->user_id){
              $res[]= $arr2;
          }
        }
        return view('user_profile',['res' => json_encode($res)]);
        // return view('user_profile');
    }
    
    // public function show()
    // {
    //     return view('role.show');
    // }
    public function signupsave(Request $request)
    {
        // return "hello";
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        
        $data = $request->all();
        // dd();
        $check = $this->create($data);

        return redirect("login");
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
        // dd($request);
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


    public function signOut() {
        session()->flush();
        return redirect('login');
    }


    public function search() {
        $query = $_GET['q'];
        $events = Event::where('name', 'LIKE' , '%'.$query.'%')->get();
        return view('search', compact('events'));
    }



}
