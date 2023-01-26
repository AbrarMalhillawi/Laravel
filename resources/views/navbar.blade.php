	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<link rel="stylesheet" href="css/navbar.css">

	
<div class="wrapper">
	<div class="navbar">
		<div class="inner_navbar">
			<div class="logo">
				<a href="#">The <span>Moment</span></a>
			</div>
			<div class="menu">
				<ul>
					<li><a href="/" class="active">Home</a></li>
					<li><a href="/index">Events</a></li>
					<li><a href="/about">About US</a></li>
					<li><a href="/contact">Contact US</a></li>
					<li><a href="log">Login</a></li>
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
