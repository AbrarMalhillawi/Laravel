<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Hash;
use Session;
use App\Models\User;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ActivityController extends Controller
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
        $events=Event::all();
        return view('admin.activityTable.index',compact('events'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.activityTable.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'type' => 'required',
            'duration' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg'
        ]);

        $date = strip_tags($request->input('date'));
        $newImageName = time() . '_' . $request->name . '.' . 
        $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);
        $activity = Event::create([
            'name' => strip_tags($request->input('name')),
            'description' => strip_tags($request->input('description')),
            'price' => strip_tags($request->input('price')),
            'type' => strip_tags($request->input('type')),
            'duration' => strip_tags($request->input('duration')),
        ]);

        $activity->image()->create([
            'url' =>  $newImageName
        ]);
        return redirect()->route('activity.index');
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
        
        return view('admin.activityTable.edit', [
            'event' => Event::findOrFail($id)
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
        $newImageName = time() . '_' . $request->name . '.' . 
        $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);      
        $event=Event::findorFail($id);
        $event->name=$request->name;
        $event->description=$request->description;
        $event->price=$request->price;
        $event->type=$request->type;
        // $event->image->url=$newImageName;
        $event->duration=$request->duration;
        $event->save();
        
        $event->image()->update([
            'url' =>  $newImageName
        ]);
         return redirect()->route('activity.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event=Event::findorfail($id);
    //   $event->users()->detach();
      $event->delete();
 
      return redirect()->route('activity.index');
    }
}
