<link rel="stylesheet" href="{{URL::asset('./css/booking_index.css')}}">

@extends('admin.layouts.master')
@section('title')
    
{{-- <a class="btn btn-primary " href="{{route('activity.create')}}">Add New Activity </a> --}}
@endsection

@section('css')
    
@endsection

@section('title_page1')


@endsection

@section('title_page2')


@endsection


@section('content')

<div class="container">
    <div class="background">

           <div class="headOfTable">
            <select name="cars" id="cars">
                <option value="volvo">Jan</option>
                <option value="saab">Feb</option>
                <option value="mercedes">Mar</option>
                <option value="audi">Apr</option>
                <option value="audi">May</option>
                <option value="audi">Jun</option>
                <option value="audi">Jul</option>
                <option value="audi">Aug</option>
                <option value="audi">Sept</option>
                <option value="audi">Oct</option>
                <option value="audi">Nov</option>
                <option value="audi">Dec</option>
            </select>
            <div class="colors">
                <span style="font-weight:700">events traffic </span>
                <span style="background:#2C74B3;" class="square">1 </span> 
                <span style="background:#205295;" class="square">2 </span> 
                <span style="background:#144272;" class="square">3 </span> 
                <span style="background:#0A2647;" class="square">4+ </span> 
            </div>
           </div>
            <table class="jackTable">
                <thead>
                    <tr class="jackTr">
                        <th class="jackTh">SU</th>
                        <th class="jackTh">MO</th>
                        <th class="jackTh">TU</th>
                        <th class="jackTh">WE</th>
                        <th class="jackTh">TH</th>
                        <th class="jackTh">FR</th>
                        <th class="jackTh">SA</th>
                    </tr>
                </thead>
                <tbody class="tbody">
                </tbody>
            </table>
        </div>
        
    </div>
    
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
                    <td class="action"><button>approve</button> <button>decline</button></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection


@section('scripts')
<script type="text/javascript" >

let arr = []
let colors = ['#fff', '#2C74B3', '#205295', '#144272', '#0A2647']
async function getUsers() {
let url = 'http://127.0.0.1:8000/api/books';
try {
    let res = await fetch(url);
    return await res.json();
} catch (error) {
    console.log(error);
}
}
async function renderUsers() {
let books = await getUsers();
let html = '<tr class="jackTr">';
const today = new Date('2023-01-1')
    for(let i=0; i<35; i++){
        // if(i % 7)
    let tomorrow =  new Date('2023-01-1')
    tomorrow.setDate(today.getDate() + i)
    let day = `${tomorrow}`.split(' ')[2]
    let book = books.filter(e => {
        if(e.date.split('-')[2] == day){
            return e
        }
    })
    html += `<td class='jackTd' ><button onclick="myFunction(${i})" style="background:${book.length >= 4 ? colors[colors.length -1] : colors[book.length]}; color:${book.length > 0 ? '#fff' : '#000'}" class="box">${day}</button></td>`
    if((i+1) % 7 == 0 && i < 30){
        html += '</tr><tr class="jackTr">'
    }
    if(book.length >= 1){
        arr.push({day, book})
    }
}
html += '</tr>'
myFunction(arr)
let container = document.querySelector('.tbody');
container.innerHTML = html;

}
renderUsers();
function myFunction(arr){
    console.log(arr)
}
    </script>
@endsection