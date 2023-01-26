@include('navbar')
    <style>
        .Login,.Home,.About,.Events{
            background-color: none;
        }
        .Contact {
            background-color: #E53854;
        }
    </style>

    <link rel="stylesheet" href="css/style.css">
    <!-- Book Now Section Start -->
    <section id="book">
        <div class="container">
            <div class="book-content-par">
                
                <div class="book-form">
                    <form>
                        <h2>Contact US</h2>
                        <input type="text" id="fname" name="firstname" placeholder="Your Name...">
                        <input type="text" id="lname" name="lastname" placeholder="Your Last Name...">
                        <textarea name="subject" id="subject" placeholder="Write something..."
                            style="height: 200px;"></textarea>
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Book Now Section End -->

@include('footer')
