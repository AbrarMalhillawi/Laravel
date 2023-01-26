@extends('admin.layouts.master')
@section('title')
    

@endsection

@section('css')
    
@endsection

@section('title_page1')
<a class="btn btn-dark" href="{{route('user.create')}}">add new user </a>

@endsection

@section('title_page2')


@endsection


@section('content')
{{-- {{dd($users[3]->image)}} --}}
@foreach ($users as $user)
<div>
    {{$user}}
    @if($user->image != null)
    <img src="{{asset('images/'.$user->image->url)}}" style="height: 100px; width:150px; display:block">
    @endif
   
   <a class="btn btn-dark" href="{{route('user.edit',$user->id)}}">edit user </a>

   <form action="{{Route('user.destroy',$user->id)}}" method="POST" >
    @method('DELETE')
    @csrf
    <button type="submit" class="btn btn-danger">Delete</button>
  </form>

</div>
@endforeach
@endsection


@section('scripts')
    
@endsection