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
    <form action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <h2 class="text-primary display-4 text-center shadow-none p-3 mb-5 rounded">Create User</h2>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" class="form-control" name="name">
          {{-- <div  class="form-text">We'll never share your email with anyone else.</div> --}}
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" name="email">
          {{-- <div  class="form-text">We'll never share your email with anyone else.</div> --}}
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Mobile</label>
            <input type="number" class="form-control" name="mobile">
          {{-- <div  class="form-text">We'll never share your email with anyone else.</div> --}}
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Password</label>
          <input type="password" class="form-control"  name="password">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Role</label>
            <input type="number" class="form-control" name="role">
            <span class="text-muted">choose number 1 for admin, 0 for user</span>
          </div>

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label ">Image</label>
            <input type="file"  name="image">
          </div>
        <button type="submit" class="btn btn-primary">Create Now</button>
    
      </form>
    
    </div>



{{-- <div class="container">
<form action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <h2>Create Now</h2>

    <label class="name">
        <span> Name</span>
        <input type="text" id="name" name="name">
    </label>

    <label class="name">
        <span>mobile</span>
        <input type="number" name="mobile">
    </label>
    <br>
    <label class="e-p">
        <span>Email</span>
        <input type="email" name="email" id="email">
    </label>
    <br>
    <label class="e-p">
        <span>Password</span>
        <input type="password" name="password" id="password">
    </label>
    <br>
    <label class="e-p">
        <span>Role</span>
        <input type="number" name="role">
    </label>

    <label class="e-p">
      <span>image</span>
      <input type="file"  name="image">
  </label>


   
    <button type="submit" class="submit">Create Now</button>
</form> --}}
 

</div>




@endsection


@section('scripts')
    
@endsection