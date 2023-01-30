<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1" />
    <title>at moment</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,500;0,600;1,300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="css/owl.carousel.min.css">
    <link type="text/css" rel="stylesheet" href="css/owl.theme.default.min.css">
    <link type="text/css" rel="stylesheet" href="css/style.css">

	<style>
		.Login,.Home,.Contact,.About{
			background-color: none;
		}
		.Events {
			background-color: #E53854;
		}
	  </style>
</head>

<body>
    @include('navbar')

   
    <!-- Second Slides Section -->
    <section id="welcome-text">
        <div class="container">
            <h2>Some of our Events</h2>
            <p>Excerpts from the best trips we have taken by the best groups that have joined us</p>
        </div>
    </section>


	

    <!-- Mutiple Slider Section Starts -->
    <section id="water-slider">
        <div class="container">
			<h2 id="Shooting">Shooting Events</h2>
            <p></p>



            <section id="slides-par">
				<div class="divcontainer">
					<div class="slides">
						@foreach ($events as $event)
						@if($event->type=="Shooting_Events")
						<div class="slide_1 slide_22">
							<img src="{{asset('images/'.$event->image->url)}}" alt="">
							<div class="slide-info">
								<a href="{{route('event.show',$event->id)}}">
									<p>{{$event->name}}</p>
								</a>
							</div>
						</div>
						@endif
					    @endforeach
					</div>
				</div>
			</section>

        </div>
    </section>

        </div>
    </section> 

	<br><br>
	{{-- ------------------------------------------------------------------------------- --}}
	<section id="water-slider11">
        <div class="container">
			<h2 id="Sea">Sea Events</h2>
            <p></p>
			<section id="slides-par">
				<div class="divcontainer">
					<div class="slides">
						@foreach ($events as $event)
						@if($event->type=="Sea_Events")
						<div class="slide_1 slide_22">
							<img src="{{asset('images/'.$event->image->url)}}" alt="">
							<div class="slide-info">
								<a href="{{route('event.show',$event->id)}}">
									<p>{{$event->name}}</p>
								</a>
							</div>
						</div>
						@endif
					    @endforeach
					</div>
				</div>
			</section>
        </div>
    </section>
    
	<br><br>
	{{-- ------------------------------------------------------------------------------- --}}
	<section id="water-slider111">
        <div class="container">
			<h2 id="Advanture">Advanture Events</h2>
            <p></p>
			<section id="slides-par">
				<div class="divcontainer">
					<div class="slides">
						@foreach ($events as $event)
						@if($event->type=="Advanture_Events")
						<div class="slide_1 slide_22">
							<img src="{{asset('images/'.$event->image->url)}}" alt="">
							<div class="slide-info">
								<a href="{{route('event.show',$event->id)}}">
									<p>{{$event->name}}</p>
								</a>
							</div>
						</div>
						@endif
					    @endforeach
					</div>
				</div>
			</section>
			
        </div>
    </section>
  
    <!-- Mutiple Slider Section Ends -->

@include('footer')

    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/extrenaljq.js"></script>
</body>

</html>