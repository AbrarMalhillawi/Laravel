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
                        <input type="radio" name="radio-btn" id="radio1">
                        <input type="radio" name="radio-btn" id="radio2">
                        <input type="radio" name="radio-btn" id="radio3">
                        <input type="radio" name="radio-btn" id="radio4">
                        <!--radio buttons end-->
                        <!--slide images start-->
                        <div class="slide first">
                          <img src="{{URL::asset('images/sea/Party boat.jpeg')}}" alt="">
                        </div>
                        <div class="slide">
                          <img src="{{URL::asset('images/sea/Net fishing.jpg')}}" alt="">
                        </div>
                        <div class="slide">
                          <img src="{{URL::asset('images/sea/Fly fishing.jpeg')}}" alt="">
                        </div>
                        <div class="slide">
                          <img src="{{URL::asset('images/sea/back.jpg')}}" alt="">
                        </div>
                        <!--slide images end-->
                        <!--automatic navigation start-->
                        <div class="navigation-auto">
                          <div class="auto-btn1"></div>
                          <div class="auto-btn2"></div>
                          <div class="auto-btn3"></div>
                          <div class="auto-btn4"></div>
                        </div>
                        <!--automatic navigation end-->
                      </div>
                      <!--manual navigation start-->
                      <div class="navigation-manual">
                        <label for="radio1" class="manual-btn"></label>
                        <label for="radio2" class="manual-btn"></label>
                        <label for="radio3" class="manual-btn"></label>
                        <label for="radio4" class="manual-btn"></label>
                      </div>
                      <!--manual navigation end-->
                    </div>
                    <!--image slider end-->
                
                    <script type="text/javascript">
                    var counter = 1;
                    setInterval(function(){
                      document.getElementById('radio' + counter).checked = true;
                      counter++;
                      if(counter > 4){
                        counter = 1;
                      }
                    }, 5000);
                    </script>
                
                {{-- ///////////////////////////// end slider //////////////////////////////////// --}}
            </div>

            <div class="basic-info">
                <h1>{{$event->name}}</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus temporibus corporis repudiandae, consectetur nostrum nisi commodi placeat rerum molestias numquam nihil accusantium deleniti! Enim, nesciunt a quis amet hic officia. Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae nemo accusantium tempora facere doloremque cum iusto, ut neque, fuga omnis libero laborum ullam. At dolorum qui atque labore illo dignissimos.</p>
            

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
                    
                <table>
                    <thead>
                        <tr class="days">
                                <th class="day1" onclick="day1()"><a href="#"  >28-01-2023</a></th>
                                <th class="day2" onclick="day2()"><a href="#"  >29-01-2023</a></th>
                                <th class="day3" onclick="day3()"><a href="#"  >30-01-2023</a></th>
                        </tr>
                    </thead>

                    <tbody id="d1">
                        <tr> <th>Time</th> <th>Price</th> <th>Available</th> </tr>
                        <tr> <td><input type="checkbox"> 12:30-17:00</td> <td>10.0</td> <td>0</td> </tr>
                        <tr> <td><input type="checkbox"> 15:00-19:30</td> <td>10.0</td> <td>12</th> </tr>
                        <tr> <td><input type="checkbox"> 17:30-22:00</td> <td>10.0</td> <td>18</td> </tr>
                    </tbody>

                    <tbody id="d2">
                        <tr> <th>Time</th> <th>Price</th> <th>Available</th> </tr>
                        <tr> <td><input type="checkbox"> 9:30-14:00</td> <td>10.0</td> <td>20</td> </tr>
                        <tr> <td><input type="checkbox"> 11:30-16:00</td> <td>10.0</td> <td>18</th> </tr>
                        <tr> <td><input type="checkbox"> 19:00-23:30</td> <td>10.0</td> <td>1</td> </tr>
                    </tbody>

                    <tbody id="d3">
                        <tr> <th>Time</th> <th>Price</th> <th>Available</th> </tr>
                        <tr> <td><input type="checkbox"> 8:00-12:30</td> <td>10.0</td> <td>40</td> </tr>
                        <tr> <td><input type="checkbox"> 15:00-19:30</td> <td>10.0</td> <td>37</th> </tr>
                        <tr> <td><input type="checkbox"> 18:30-23:00</td> <td>10.0</td> <td>47</td> </tr>
                    </tbody>
                    
                </table>

                <button type="submit" class="table-btn">submit</button>


                <script>
                    var hamburger2 = document.querySelector(".hamburger2");
                    var menu2 = document.querySelector(".menu2");

                    hamburger2.addEventListener("click", function(){
                        menu2.classList.toggle("active");
                    })


                    function day1() {
                        document.getElementById('d1').style.display="table-row-group";
                        document.getElementById('d2').style.display="none";
                        document.getElementById('d3').style.display="none";
                    }

                    function day2() {
                        document.getElementById('d2').style.display="table-row-group";
                        document.getElementById('d1').style.display="none";
                        document.getElementById('d3').style.display="none";
                    }

                    function day3() {
                        document.getElementById('d3').style.display="table-row-group";
                        document.getElementById('d2').style.display="none";
                        document.getElementById('d1').style.display="none";
                    }

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