@include('navbar')

  <style>
    .Login,.Home,.Contact,.Events{
        background-color: none;
    }
    .About {
        background-color: #E53854;
    }
  </style>
  
    <link rel="stylesheet" href="css/about.css">

    <section id="about">
  
        <!--  Heading  -->
        <div class="about-heading">
              <h1>About Us</h1>
              <hr />
              <p>We are a company that offers unique activities for all age groups</p>
          </div>
        
        <!--  Section 1  -->
        <div class="about-section">
          <div class="about-item who"></div>
          <div class="about-item">
            <h2>Who We Are</h2>
                  <p>Our company is dedicated to providing unique and exciting activities for people of all ages. Whether you're looking for an adrenaline rush or a peaceful day out, we have something for everyone. We offer a wide range of activities in Jordan, including archery, pistol shooting, climbing, and fishing. Our experienced instructors ensure that every participant has a safe and enjoyable experience, while our beautiful locations provide the perfect backdrop for your adventure.</p>
                  <p> We pride ourselves on providing high-quality equipment and excellent customer service. So come and join us for an unforgettable experience!</p>
          </div>
        </div>
        <!--  Section 2  -->
        <div class="about-section">
          <div class="about-item process"></div>
          <div class="about-item">

            <h2>Our Process</h2>
            <p>"At our company, we believe that the process is just as important as the outcome. That's why we take great care to ensure that every step of your experience with us is smooth and enjoyable.</p>
            <p>  First, our team will work with you to understand your needs and tailor the perfect activity to suit them. Whether you're looking for a corporate team-building event, or just a fun day out with friends, we'll make sure that your experience is tailored to your group's needs. </p>
            <p>  Next, our experienced instructors will provide you with all the necessary equipment and training to ensure that you have a safe and enjoyable experience. They will be there to guide you and answer any questions you might have.</p>
            <p> Finally, we will take care of all the logistics of the activity, so you can focus on having fun and creating memories. Whether it's transportation, food, or accommodation, we've got you covered.</p>
          </div>
        </div>
        <!--  Section 3  -->
        <div class="about-section">
          <div class="about-item contact"></div>
          <div class="about-item">
            <h2>Come Say Hello!</h2>
                <p> At every step, we are dedicated to providing you with excellent customer service and a truly unforgettable experience."</p>
                <a href="/contact"><button class="about-btn">Contact Us</button></a>
          </div>
        </div>
    </section>

@include('footer')
