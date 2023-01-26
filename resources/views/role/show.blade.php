<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/all_min.css">
    <link rel="stylesheet" href="css/show.css">
    <title>Product Details</title>
</head>
<body>
    @include('navbar')

    <div class="show">
        <div class="box">
            <div class="images">
                <div class="img-holder active">
                    <img src="images/WhatsApp Image 2023-01-24 at 3.16.09 PM.jpeg">
                </div>
                <div class="img-holder">
                    <img src="images/WhatsApp Image 2023-01-24 at 3.16.09 PM.jpeg">
                </div>
                <div class="img-holder">
                    <img src="images/WhatsApp Image 2023-01-24 at 3.16.09 PM.jpeg">
                </div>
                <div class="img-holder">
                    <img src="images/WhatsApp Image 2023-01-24 at 3.16.09 PM.jpeg">
                </div>
            </div>

            <div class="basic-info">
                <h1>horseback riding</h1>
                <div class="rate">
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                </div>
                <span>$250</span>
                <div class="options">
                    <a href="#">Buy It Now</a>
                    <a href="#">Add to Cart</a>
                </div>

                <ul class="features">
                    <li><i class="fa-solid fa-circle-check"></i>Supported Feature</li>
                    <li><i class="fa-solid fa-circle-check"></i>Supported Feature</li>
                    <li><i class="fa-solid fa-circle-check"></i>Supported Feature</li>
                    <li><i class="fa-solid fa-circle-xmark"></i>Unsupported Feature</li>
                    <li><i class="fa-solid fa-circle-xmark"></i>Unsupported Feature</li>
                </ul>
                <ul class="social">
                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                </ul>
            </div>

            <div class="description">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus temporibus corporis repudiandae, consectetur nostrum nisi commodi placeat rerum molestias numquam nihil accusantium deleniti! Enim, nesciunt a quis amet hic officia. Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae nemo accusantium tempora facere doloremque cum iusto, ut neque, fuga omnis libero laborum ullam. At dolorum qui atque labore illo dignissimos.</p>
               
            </div>

            <div id="calendar-wrap">
      
                <div id="calendar">
                    <ul class="weekdays">
                        <li>Sunday</li>
                        <li>Monday</li>
                        <li>Tuesday</li>
                        <li>Wednesday</li>
                        <li>Thursday</li>
                        <li>Friday</li>
                        <li>Saturday</li>
                    </ul>
        
                    <!-- Days from previous month -->
        
                    <ul class="days">
                        <li class="day other-month">
                            <div class="date">27</div>    					
                        </li>
                        <li class="day other-month">
                            <div class="date">28</div>
                        </li>
                        <li class="day other-month">
                            <div class="date">29</div>    					
                        </li>
                        <li class="day other-month">
                            <div class="date">30</div>    					
                        </li>
                        <li class="day other-month">
                            <div class="date">31</div>    					
                        </li>
        
                        <!-- Days in current month -->
        
                        <li class="day">
                            <div class="date">1</div>    					
                        </li>
                        <li class="day">
                            <div class="date">2</div>
                        </li>
                    </ul>
        
                        <!-- Row #2 -->
        
                    <ul class="days">
                        <li class="day">
                            <div class="date">3</div>    					
                        </li>
                        <li class="day">
                            <div class="date">4</div>    					
                        </li>
                        <li class="day">
                            <div class="date">5</div>    					
                        </li>
                        <li class="day">
                            <div class="date">6</div>    					
                        </li>
                        <li class="day">
                            <div class="date">7</div>
                                               
                        </li>
                        <li class="day">
                            <div class="date">8</div>    					
                        </li>
                        <li class="day">
                            <div class="date">9</div>    					
                        </li>
                    </ul>
        
                        <!-- Row #3 -->
        
                    <ul class="days">
                        <li class="day">
                            <div class="date">10</div>    					
                        </li>
                        <li class="day">
                            <div class="date">11</div>    					
                        </li>
                        <li class="day">
                            <div class="date">12</div>    					
                        </li>
                        <li class="day">
                            <div class="date">13</div>    					
                        </li>
                        <li class="day">
                            <div class="date">14</div>			 
                        </li>
                        <li class="day">
                            <div class="date">15</div>    					
                        </li>
                        <li class="day">
                            <div class="date">16</div>    					
                        </li>
                    </ul>
        
                        <!-- Row #4 -->
        
                    <ul class="days">
                        <li class="day">
                            <div class="date">17</div>    					
                        </li>
                        <li class="day">
                            <div class="date">18</div>    					
                        </li>
                        <li class="day">
                            <div class="date">19</div>    					
                        </li>
                        <li class="day">
                            <div class="date">20</div>    					
                        </li>
                        <li class="day">
                            <div class="date">21</div>    					
                        </li>
                        <li class="day">
                            <div class="date">22</div>
                        </li>
                        <li class="day">
                            <div class="date">23</div>    					
                        </li>
                    </ul>
        
                       <!-- Row #5 -->
        
                    <ul class="days">
                        <li class="day">
                            <div class="date">24</div>    					
                        </li>
                        <li class="day">
                            <div class="date">25</div>
                        </li>
                        <li class="day">
                            <div class="date">26</div>    					
                        </li>
                        <li class="day">
                            <div class="date">27</div>    					
                        </li>
                        <li class="day">
                            <div class="date">28</div>    					
                        </li>
                        <li class="day">
                            <div class="date">29</div>    					
                        </li>
                        <li class="day">
                            <div class="date">30</div>    					
                        </li>
                    </ul>
        
                    <!-- Row #6 -->
        
                    <ul class="days">
                        <li class="day">
                            <div class="date">31</div>    					
                        </li>
                        <li class="day other-month">
                            <div class="date">1</div>  					
                        </li>
                        <li class="day other-month">
                            <div class="date">2</div>    					
                        </li>
                        <li class="day other-month">
                            <div class="date">3</div>    					
                        </li>
                        <li class="day other-month">
                            <div class="date">4</div>    					
                        </li>
                        <li class="day other-month">
                            <div class="date">5</div>    					
                        </li>
                        <li class="day other-month">
                            <div class="date">6</div>    					
                        </li>
                    </ul>
        
                </div>
            </div>

        </div>
    </div>
    @include('footer')

</body>
</html>