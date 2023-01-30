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
<div style=" margin-bottom:30px">
  <table  class="myTable">
      <thead>
          <tr>
              <th>#</th>
              <th>User Name</th>
              <th>Event Name</th>
              <th>Duration</th>
              <th>date</th>
              <th>status</th>
              <th>action</th>
          </tr>
      </thead>
      <tbody >
          @foreach (json_decode($res) as $re)
          <tr>
              <td>{{$re->id}}</td>
              <td>{{$re->user_name}}</td>
              <td>{{$re->event_name}}</td>
              <td>{{$re->hours}}</td>
              <td>{{$re->date}}</td>
              <td>{{$re->status}}</td>
              <form action="{{Route('booking.update',$re->id)}}" method="POST">
                @method('PUT')
                 @csrf
                 <input type="hidden" name="status" value="approved">
              <td class="action"><button type="sumbit">approve</button> </form> 



                <form action="{{Route('booking.update',$re->id)}}" method="POST">
                  @method('PUT')
                   @csrf
                   <input type="hidden" name="status" value="decline">
                <td class="action"><button type="sumbit">decline</button> </form> </td>
    
             
          </tr>
          @endforeach
      </tbody>
  </table>
</div>

@endsection


@section('scripts')
    
@endsection