@include('navbar')

    
    <!-- Book Now Section Start -->
    <section id="book">
        <div class="container">
            <div class="book-content-par">
                <div class="book-counter">
                    <h3>Book Now</h3>
                    <div id="clockdiv">
                        <div>
                            <span class="days"></span>
                            <div class="smalltext">Days</div>

                        </div>
                        <div>
                            <span class="hours"></span>
                            <div class="smalltext">Hours</div>

                        </div>
                        <div>
                            <span class="minutes"></span>
                            <div class="smalltext">Minutes</div>

                        </div>
                        <div>
                            <span class="seconds"></span>
                            <div class="smalltext">Seconds</div>

                        </div>
                    </div>
                </div>
                <div class="book-form">
                    <form>
                        <input type="text" id="fname" name="firstname" placeholder="Your Name...">
                        <input type="text" id="lname" name="lastname" placeholder="Your Last Name...">
                        <select name="country" id="country">
                            <option value="australia">Australia</option>
                            <option value="canada">Canada</option>
                            <option value="india">USA</option>
                        </select>
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
