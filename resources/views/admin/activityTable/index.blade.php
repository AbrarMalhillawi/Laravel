@extends('admin.layouts.master')
@section('title')
    

@endsection

@section('css')
    
@endsection

@section('title_page1')
<a class="btn btn-dark" href="{{route('activity.create')}}">add new event </a>

@endsection

@section('title_page2')


@endsection


@section('content')
@foreach ($events as $event)
<div>
    {{$event}}
   <img src="{{asset('images/'.$event->image->url)}}" style="height: 100px; width:150px; display:block">
   <a class="btn btn-dark" href="{{route('activity.edit',$event->id)}}">edit event </a>

   <form action="{{Route('activity.destroy',$event->id)}}" method="POST" >
    @method('DELETE')
    @csrf
    <button type="submit" class="btn btn-danger">Delete</button>
  </form>




</div>
@endforeach
@endsection


@section('scripts')
    
@endsection