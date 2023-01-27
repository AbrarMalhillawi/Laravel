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

    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" > --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <style>
        .Login,.Contact,.About,.Events{
            background-color: none;
        }
        .Home {
            background-color: #E53854;
        }
    </style>
    
</head>

<body>
    @include('navbar')

    <header>
        <div class="divcontainer">
            <div class="header-info-par">
                <h1 class="typewrite" data-period="2000"
                    data-type='["Happiness is closer than you think","Adventure Awaits, go find it.","Dont be a tourist, be a traveler."]'>
                </h1>
                <h1> ALOHA</h1>
                <p>ِِِِِِِadventurer <br> join us on the best trips . <br>
                     We find the spirit of adventure, knowledge and learning the best methods through experience</p>
                {{-- <a href="#" class="a">Book trip</a> --}}
            </div>
            <div class="video">
                <video id="video" autoplay loop muted>
                    <source src="images/travel-video.mp4" type="video/mp4" />
                </video>
            </div>
        </div>
    </header>

    <section>
        <div class="slider">
            <h2 class="text-center font-weight-bold">Our Partners</h2>
            <section class="customer-logos slider">
                <div class="slide"><img src="images/m4.png" alt="logo"></div>
                <div class="slide"><img src="images/m5.png" alt="logo"></div>
                <div class="slide"><img src="images/m2.png" alt="logo"></div>
                <div class="slide"><img src="images/m.jpg" alt="logo"></div>
                <div class="slide"><img src="images/m7.jpg" alt="logo"></div>
                <div class="slide"><img src="images/m6.png" alt="logo"></div>
                <div class="slide"><img src="images/m8.jpg" alt="logo"></div>
            </section>
        </div>
    
        
    
        <script>
        
            $(document).ready(function(){
                $('.customer-logos').slick({
                    slidesToShow: 6,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 1500,
                    arrows: false,
                    dots: false,
                    pauseOnHover:false,
                    responsive: [{
                        breakpoint: 768,
                        setting: {
                            slidesToShow:4
                        }
                    }, {
                        breakpoint: 520,
                        setting: {
                            slidesToShow: 3
                        }
                    }]
                });
            });
    
        </script>
    
      </section>
    
    
    <section id="welcome-text">
        <div class="container">
            <pre>

            </pre>
        </div>
    </section>
  
 
    <section id="water-slider2">
        <div class="container">
            <h3 style="font-size:50px">Start Planning Your Dream Holiday</h3>
            <br>
            <br>
            <div class="owl-carousel owl-theme">

                <div class="item">
                    <div class="owl-img-par">
                        <img src="images/fiji-surprise/5.jpg" alt="" class="img-responsive" />
                        <div class="owl-img-info">
                            <h3>Bangkok</h3>
                            <p>THAILAND</p>
                        </div>
                    </div>
                    <div class="owl-img-par">
                        <img src="images/fiji-surprise/6.jpg" alt="" class="img-responsive" />
                        <div class="owl-img-info">
                            <h3>Bangkok</h3>
                            <p>THAILAND</p>
                        </div>
                    </div>
                    <div class="owl-img-par">
                        <img src="images/fiji-surprise/26.jpg" alt="" class="img-responsive" />
                        <div class="owl-img-info">
                            <h3>Bangkok</h3>
                            <p>THAILAND</p>
                        </div>
                    </div>
                </div>
                    <br>
                <div class="item">
                    <div class="owl-img-par">
                        <img src="images/land/Camel ride.jpg" alt="" class="img-responsive" />
                        
                        <div class="owl-img-info">
                            <h3>Rome</h3>
                            <p>ITALY</p>
                        </div>
                    </div>
                    <div class="owl-img-par">
                        <img src="images/land/desert ride.jpg" alt="" class="img-responsive" />
                        
                        <div class="owl-img-info">
                            <h3>Rome</h3>
                            <p>ITALY</p>
                        </div>
                    </div>
                    <div class="owl-img-par">
                        <img src="images/land/long walk.jpeg" alt="" class="img-responsive" />
                        <div class="owl-img-info">
                            <h3>Bangkok</h3>
                            <p>THAILAND</p>
                        </div>
                    </div>
                </div>
                    <br>
                <div class="item">
                    <div class="owl-img-par">
                        <img src="images/sea/Fly fishing.jpeg" alt="" class="img-responsive" />
                        <div class="owl-img-info">
                            <h3>Cairo</h3>
                            <p>EGYPT</p>
                        </div>
                    </div>
                    <div class="owl-img-par">
                        <img src="images/sea/Net fishing.jpg" alt="" class="img-responsive" />
                        <div class="owl-img-info">
                            <h3>Bangkok</h3>
                            <p>THAILAND</p>
                        </div>
                    </div>
                    <div class="owl-img-par">
                        <img src="images/sea/Party boat.jpeg" alt="" class="img-responsive" />
                        <div class="owl-img-info">
                            <h3>Bangkok</h3>
                            <p>THAILAND</p>
                        </div>
                    </div>
                </div>
             
            </div>
        </div>
    </section>
   

    
    @include('footer')
    
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/extrenaljq.js"></script>

   </body>

</html>