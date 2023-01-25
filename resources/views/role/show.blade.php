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
            </div>
            <div class="description">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus temporibus corporis repudiandae, consectetur nostrum nisi commodi placeat rerum molestias numquam nihil accusantium deleniti! Enim, nesciunt a quis amet hic officia. Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae nemo accusantium tempora facere doloremque cum iusto, ut neque, fuga omnis libero laborum ullam. At dolorum qui atque labore illo dignissimos.</p>
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
        </div>
    </div>
    @include('footer')

</body>
</html>