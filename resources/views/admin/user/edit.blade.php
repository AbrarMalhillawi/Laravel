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
<div class="container border shadow-lg p-3 mb-5 bg-white rounded">
  <form action="{{route('user.update',$user->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
      <h2 class="text-primary display-4 text-center">Edit User</h2>

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input type="text" id="name" class="form-control" name="name" value="{{$user->name}}">
      </div>
      <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email</label>
          <input type="email" name="email" class="form-control" id="email" value="{{$user->email}}">
      </div>
      <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Mobile</label>
          <input type="number" name="mobile" class="form-control" value="{{$user->mobile}}">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="password" value="{{$user->password}}">
      </div>

      <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Role</label>
          <input type="number" name="role" class="form-control" value="{{$user->role}}">
          <span class="text-muted">choose number 1 for admin, 0 for user</span>
        </div>

  
      <button type="submit" class="btn btn-primary">Edit Now</button>
  
    </form>
  
  </div>





  {{-- <div class="container">
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
   
    <button type="submit" class="submit">Create Now</button>
</form>
 

</div> --}}
    
@endsection


@section('scripts')
    
@endsection