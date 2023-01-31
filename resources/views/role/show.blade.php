<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/all_min.css">
    <link rel="stylesheet"  href="{{URL::asset('css/show.css')}}">
    <title>Product Details</title>

    {{-- ///////// Bootstrap //////////// --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> --}}

    {{-- ///////// flatpickr.js //////////// --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

</head>
<body>
    @include('navbar')
  
    <div class="show">
        <div class="box">
            <div class="images">
                {{-- ///////////////////////////////// start slider //////////////////////////////////// --}}
                
                    <!--image slider start-->
                    <div class="slider">
                        <div class="slides">
                            <!--radio buttons start-->
                            {{-- <input type="radio" name="radio-btn" id="radio1">
                            <input type="radio" name="radio-btn" id="radio2">
                            <input type="radio" name="radio-btn" id="radio3">
                            <input type="radio" name="radio-btn" id="radio4"> --}}
                            <!--radio buttons end-->
                            <!--slide images start-->
                            <div class="slide first">
                                <img src="{{asset('images/'.$event->image->url)}}" alt="">
                                {{-- src="{{asset('images/'.$event->image->url)}}" --}}
                            {{-- <img src="{{URL::asset('images/sea/Party boat.jpeg')}}" alt=""> --}}
                            </div>
                            {{-- <div class="slide">
                            <img src="{{URL::asset('images/sea/Net fishing.jpg')}}" alt="">
                            </div>
                            <div class="slide">
                            <img src="{{URL::asset('images/sea/Fly fishing.jpeg')}}" alt="">
                            </div>
                            <div class="slide">
                            <img src="{{URL::asset('images/sea/back.jpg')}}" alt="">
                            </div> --}}
                            <!--slide images end-->
                            <!--automatic navigation start-->
                            {{-- <div class="navigation-auto">
                            <div class="auto-btn1"></div>
                            <div class="auto-btn2"></div>
                            <div class="auto-btn3"></div>
                            <div class="auto-btn4"></div>
                            </div> --}}
                            <!--automatic navigation end-->
                        </div>
                            <!--manual navigation start-->
                            {{-- <div class="navigation-manual">
                                <label for="radio1" class="manual-btn"></label>
                                <label for="radio2" class="manual-btn"></label>
                                <label for="radio3" class="manual-btn"></label>
                                <label for="radio4" class="manual-btn"></label>
                            </div> --}}
                      <!--manual navigation end-->
                    </div>
                    <!--image slider end-->
                
                    {{-- <script type="text/javascript">
                    var counter = 1;
                    setInterval(function(){
                      document.getElementById('radio' + counter).checked = true;
                      counter++;
                      if(counter > 4){
                        counter = 1;
                      }
                    }, 5000);
                    </script> --}}
                
                {{-- ///////////////////////////// end slider //////////////////////////////////// --}}
            </div>

            <div class="basic-info">
                <h1 class="helowolrd">{{$event->name}}</h1>
                <p><span style="font-size:1.2rem">Details:</span> {{$event->description}}.</p>
                <p><span style="font-size:1.2rem">Price:</span> {{$event->price}}jd</p>
                @if (session('user'))
                <p class="notezohde"><span style="font-size:1.2rem">note:</span> if you clicked on 5 that means your resrvation from 04 to 05 am</p>
                @endif
                

                {{-- <div class="description"> --}}
                
                    {{-- <form class="calendar" action="{{route('event.store')}}" method="POST">
                        @csrf
                        <input class="form-control" type="datetime-local" placeholder="Select DateTime" name="datetime">
                        <input  type="hidden"  name="event" value="{{$event->id}}">
                        @if(session('user'))
                        <input  type="hidden"  name="user" value="{{session('user')->id}}">
                        @endif
                        <button type="submit">submit</button>
                    </form> --}}

                        {{-- @if ($event->users())
                    <div> --}}
                        {{-- @foreach ($event->users() as $user)
                            {{$user->id}}
                        @endforeach --}}
                        {{-- {{$event->users()->first()->name}} --}}
                        {{-- </div>     
                        @endif --}}
                    
                {{-- </div> --}}
                
                <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
                    
                <table id="table" border=1>
                    <thead>
                        <tr class="days">
                                <th class="day1" colspan="3">
                                    <div class="dateAndDay">
                                        <div class="amAndpm">
                                            <button id="amAndpm">am</button>
                                        </div>
                                        <div>2023-1-31</div>
                                    </div>
                                </th>
                        </tr>
                    </thead>

                    <tbody id="parentbodyTable">
                            {{-- JAVA SCRIPT LINE 37 TO -- --}}
                    </tbody>
                    
                </table>

                <div class="bookAndReserve">
                    <button id="sendDate" disabled class="bookBtn">book</button>
                    @if (!session('user'))
                    <div id="book">
                        {{-- JAVASCRIPT --}}
                        You need to login to make your resrvation
                    </div>
                    @else
                    <div id="book">
                        {{-- JAVASCRIPT --}}
                        click to choose your time
                    </div>
                    @endif
                </div>
                @if (session('user'))
                <input  type="hidden" id="user"  name="user" value="{{session('user')->id}}">
                @endif
                <input  type="hidden" id="eventId"  name="eventId" value="{{$event->id}}">
                <script>
                    
                  let userId = document.getElementById('user').value
                  let eventId = document.getElementById('eventId').value
                //   console.log(eventId)
                  let amAndpm = document.getElementById('amAndpm')
                //   console.log(amAndpm.innerHTML)
                  amAndpm.addEventListener('click',()=>{
                    if(amAndpm.innerHTML == 'am'){
                        amAndpm.innerHTML = 'pm'
                    }else{
                        amAndpm.innerHTML = 'am'
                    }
                  })
                  let parentbodyTable = document.getElementById('parentbodyTable')
                    let bodyTable =  `<tr>`
                    for(let i=1; i <13; i++){
                        let className = `hour${i}`
                    bodyTable += `<td class=" ${className}" ><button class="hour" onclick="myFunction(${i})" id="hour1">${i}</button></td>`
                        if(i== 3 || i == 6 || i == 9){
                            bodyTable += `</tr><tr>`
                        }
                    }
                    bodyTable += `</tr>`
                    parentbodyTable.innerHTML = bodyTable
                    // console.log(bodyTable)
                    let hour = document.getElementsByClassName('hour')
                    let arr = []
                    function myFunction(id) {
                        if(arr.indexOf(id) == -1){
                            arr.push(id)
                        }else{
                            arr = arr.filter(e => e != id)
                        }
                        hour[id - 1].classList.toggle("onCount")                        
                        arr.sort(function(a, b){return a-b});
                        retrieveData()
                    }
                    let bookBtn = document.getElementById('sendDate')
                    function retrieveData(){
                        let book = document.getElementById('book')
                        book.innerHTML = `you would reserve at ${arr.join(' - ')}`
                        book.style.marginTop = '25px'
                        bookBtn.classList.add('table-btn')
                        bookBtn.disabled = false                        
                    }
                    bookBtn.addEventListener('click',()=>{
                     console.log(arr)
                     book.innerHTML = `your reservation will be confirmed in 24 hours to pursuit your application check your profile`
                     var dateObj = new Date();
                    var month = dateObj.getUTCMonth() + 1; //months from 1-12
                    var day = dateObj.getUTCDate();
                    var year = dateObj.getUTCFullYear();

                    newdate = year + "-" + month + "-" + day;
                    // eventId = window.location.href.slice(-1)
                     let data = {
                        hours: arr.join('-'),
                        date: newdate,
                        date: '2023-1-31',
                        event_id: eventId,
                        user_id: userId,
                     }
                     console.log(data)
                     fetch("http://127.0.0.1:8000/api/books", {
                    method: "POST",
                    body: JSON.stringify(data),
                    headers: {
                        "Content-type": "application/json; charset=UTF-8"
                    }
                    })
                    .then(response => response.json())
                    .then(json => console.log(json));
                  })

fetch("http://127.0.0.1:8000/api/books")
   // Converting received data to JSON
.then(response => response.json())
.then(json => { 
console.log(json)
});
 

                </script> 

            </div>

        
            <script src="JS/show.js"></script>

        </div>
    </div>
    @include('footer')

   

    {{-- ///////// Bootstrap //////////// --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    {{-- ///////// flatpickr.js //////////// --}}
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>


    <script>
        config = {
            enableTime: true,
            minTime: "16:00",
            maxTime: "22:00",
            // inline: true
        }
         
        flatpickr("input[type=datetime-local]", config);
    </script>

</body>
</html>