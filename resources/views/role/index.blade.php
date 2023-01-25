<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>responsive ecommerce website design</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">

	<link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

</head>
<body>
	<!----header--->
	@include('navbar')

	<!----featured--->
	<section class="featured" id="featured">
		<div class="center-text">
			<h2>All Activity</h2>
		</div>

		<div class="featured-content">
			{{-- @foreach ($collection as $item) --}}
				
					<a href="show">
						<div class="row">
							<img src="images/WhatsApp Image 2023-01-24 at 3.16.09 PM.jpeg">
							<div class="fea-text">
								{{-- <h5>{{$name_activity}}</h5> --}}
								{{-- <p>{{$price_activity}}</p> --}}
							</div>
							
						</div>
					</a>

					
			{{-- @endforeach --}}
			
		</div>
	</section>

    

	<!----new--->
	<section class="new" id="new">
		<div class="center-text">
			<h2>Sales</h2>
		</div>

		<div class="new-content">

			{{-- @foreach ($collection as $item) --}}
				<a href="show">
					<div class="box">
						<img src="images/WhatsApp Image 2023-01-24 at 3.16.30 PM.jpeg">
						{{-- <h5>{{$name_activity}}</h5> --}}
						{{-- <h6>{{$price_activity}}</h6> --}}
						<div class="sale">
							<h4>Sale</h4>
						</div>
					</div>
				</a>

				
			{{-- @endforeach --}}
			
		</div>
	</section>


	
	<!----contact--->
	
	@include('footer')

	<!----scroll top--->
	<a href="#" class="top"><i class='bx bx-up-arrow-alt' ></i></a>


	<script src="https://unpkg.com/scrollreveal"></script>

	<!----custom js link--->
	<script src="JS/script.js"></script>
	
</body>
</html>