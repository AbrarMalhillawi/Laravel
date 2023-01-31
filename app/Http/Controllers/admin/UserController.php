<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Hash;
use Session;
use App\Models\User;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     

    // public function  __construct()
    // {
    //     if(Auth::check()){
    //         if(Auth::user()->role == 0 ){
    //             return redirect('/login');
    //         }  
    //     }
    //     else 
    //     {
    //         return redirect('/');  
    //     }
    // }

    public function index()
    {
        $users=User::all();
        return view('admin.user.index',compact('users'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
           
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //   $array= [$request->name,$request->email,$request->role,$request->email_verified_at,$request->password,$request->image];
    //   dd($array);  
    // dd($request->mobile);

      $request->validate([
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
            // 'email_verified_at' => 'required',
            'password' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg'
        ]);


        $newImageName = time() . '_' . '.' . 
        $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);

        $user = User::create([
            'name' => strip_tags($request->input('name')),
            'email' => strip_tags($request->input('email')),
            'email_verified_at' =>null,
            'role' => strip_tags($request->input('role')),
            'password' => strip_tags($request->input('password')),
        ]);
        $user->image()->create([
            'url' =>  $newImageName
        ]);
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        return view('admin.user.edit', [
            'user' => User::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user=User::findorFail($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->email_verified_at=null;
        $user->role=$request->role;
        $user->password=$request->password;
       
        $user->save();
         return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::findorfail($id);
    //   $user->users()->detach();
        DB::table('books')->where('user_id', $id)->delete();

        $user->delete();
 
      return redirect()->route('user.index');
    }
}
