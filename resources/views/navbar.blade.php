
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<link rel="stylesheet" href="{{URL::asset('css/navbar.css')}}">

	

	
<div class="wrapper">
	<div class="navbar">
		<div class="inner_navbar">
			<div class="logo">
				<a href="/">The <span>Moment</span></a>
			</div>
			<div class="menu">
				<ul>
					<li><a href="/" class="Home">Home</a></li>
					<li><a href="/event" class="Events">Events</a></li>
					<li><a href="/about" class="About">About US</a></li>
					<li><a href="/contact" class="Contact">Contact US</a></li>
					@if (!session('user'))
					<li><a href="login" class="Login">Login</a></li>						
					@else
					<li><a href="{{ route('signout') }}">Logout</a></li>
					@endif
					<li><a href="{{ route('userProfile') }}" class="Contact"><i class="fa-solid fa-user"></i></a></li>

				</ul>
			</div>
		</div>
		<div class="hamburger">
			<i class="fas fa-bars"></i>
		</div>
	</div>

</div>

 <script>
	var hamburger = document.querySelector(".hamburger");
	var menu = document.querySelector(".menu");

	hamburger.addEventListener("click", function(){
		menu.classList.toggle("active");
	})
</script> 
