@extends('admin.layouts.master')
@section('title')
   
@endsection

@section('css')
    
@endsection

@section('title_page1')
  
@endsection

@section('title_page2')


@endsection


@section('content')
  <div class="container">
<form action="{{route('user.update',$user->id)}}" method="POST" enctype="multipart/form-data">
  @method('PUT')
    @csrf
    <h2>Edit Now</h2>
    <label class="name">
        <span> Name</span>
        <input type="text" id="name" name="name" value="{{$user->name}}">
    </label>

    <label class="name">
        <span>mobile</span>
        <input type="number" name="mobile" value="{{$user->mobile}}">
    </label>
    <br>
    <label class="e-p">
        <span>Email</span>
        <input type="email" name="email" id="email" value="{{$user->email}}">
    </label>
    <br>
    <label class="e-p">
        <span>Password</span>
        <input type="password" name="password" id="password" value="{{$user->password}}">
    </label>
    <br>
    <label class="e-p">
        <span>Role</span>
        <input type="number" name="role" value="{{$user->role}}">
    </label>

    {{-- <label class="e-p">
      <span>image</span>
      <input type="file"  name="image" >
  </label> --}}


   
    <button type="submit" class="submit">Create Now</button>
</form>
 

</div>
    
@endsection


@section('scripts')
    
@endsection