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
    <form action="{{route('activity.update',$event->id)}}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <h2 class="text-primary display-4 text-center">Edit Activity</h2>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">name</label>
          <input type="text" class="form-control" name="name" value="{{$event->name}}">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Description</label>
          <input type="text" class="form-control" name="description" value="{{$event->description}}">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Price</label>
          <input type="number" class="form-control" name="price" value="{{$event->price}}">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Type</label>
          <input type="text" class="form-control" name="type" value="{{$event->type}}">
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">image</label>
          <input type="file" class="form-control" name="image" value="{{$event->image}}" >
        </div>
    
        
        <button type="submit" class="btn btn-primary">Edit Activity</button>
      </form>
    
    </div>
    
@endsection


@section('scripts')
    
@endsection