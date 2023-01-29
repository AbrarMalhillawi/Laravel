@extends('admin.layouts.master')
@section('title')
    hello

@endsection

@section('css')
    
@endsection

@section('title_page1')


@endsection

@section('title_page2')


@endsection


@section('content')
<div class="container border shadow-lg p-3 mb-5 bg-white rounded">
  <form action="{{route('activity.store')}}" method="POST" enctype="multipart/form-data">
  @csrf
  <h2 class="text-primary display-4 text-center  shadow-none p-3 mb-5 rounded">Create Activity</h2>

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Name</label>
      <input type="text" class="form-control" name="name">
      {{-- <div  class="form-text">We'll never share your email with anyone else.</div> --}}
    </div>
    {{-- <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">date</label>
      <input type="date" class="form-control" name="date">
      <div  class="form-text">We'll never share your email with anyone else.</div>
    </div> --}}
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Description</label>
      <input type="text" class="form-control" name="description">
    </div>
    {{-- <div class="row">
      <div class="col">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label" >At</label>
          <input type="text" maxlength="2" class="form-control" name="at">
        </div>
      </div>
      <div class="col">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label" >to</label>
          <input type="text" class="form-control" name="to" maxlength="2">
        </div>
      </div>
    </div> --}}
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Price</label>
      <input type="number" class="form-control" name="price">
      {{-- <div  class="form-text">We'll never share your email with anyone else.</div> --}}
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Image</label>
      <input type="file"  name="image">
    </div>

    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

</div>




@endsection


@section('scripts')
    
@endsection