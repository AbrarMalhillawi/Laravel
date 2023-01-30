@extends('admin.layouts.master')
@section('title')
    
<a class="btn btn-primary " href="{{route('activity.create')}}">Add New Activity </a>
@endsection

@section('css')
    
@endsection

@section('title_page1')


@endsection

@section('title_page2')


@endsection


@section('content')

<div class="container border shadow-lg p-3 mb-5 bg-white rounded ">
  <table class="table table-striped thead-dark">
    <thead class="table table-striped text-white thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Price</th>
        <th scope="col">type</th>
        <th scope="col">duration</th>
        <th scope="col">Image</th> 
        <th scope="col">Edit</th>
        <th scope="col">Delate</th>      
      </tr>
    </thead>
    @foreach ($events as $event)
    <tbody>
      <tr>
        <th>{{$event->id}}</th>
        <td>{{$event->name}}</td>
        <td>{{$event->description}}</td>
        <td>{{$event->price}}</td>
        <td>{{$event->type}}</td>
        <td>{{$event->duration}}</td>
        <td>        
          <img src="{{asset('images/'.$event->image->url)}}" style="height: 100px; width:150px; display:block">
        </td>

        <td>   
          <a class="btn btn-primary" href="{{route('activity.edit',$event->id)}}">Edit Activity </a>
        </td>
        <td> 
          <form action="{{Route('activity.destroy',$event->id)}}" method="POST" >
          @method('DELETE')
          @csrf
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </td>
    </tbody>
    @endforeach
  </tr>
  </table>
  
  </div>



@endsection


@section('scripts')
    
@endsection