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
    <form action="{{route('activity.update',$event->id)}}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">name</label>
          <input type="text" class="form-control" name="name" value="{{$event->name}}">
          <div  class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Description</label>
          <input type="text" class="form-control" name="description" value="{{$event->description}}">
          <div  class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Price</label>
          <input type="number" class="form-control" name="price" value="{{$event->price}}">
          <div  class="form-text">We'll never share your email with anyone else.</div>
        </div>

        {{-- <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">image</label>
          <input type="file"  name="image" >
        </div> --}}
    
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    
    </div>
    
@endsection


@section('scripts')
    
@endsection