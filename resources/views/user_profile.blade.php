
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Profile Page</title>
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />
    <!-- CSS -->
    <link rel="stylesheet" href="css/user_profile.css" />
  </head>
  <body>
    @include('navbar')

    <div class="header__wrapper">
      <header class="head"></header>
      <div class="cols__container">
        <div class="left__col">

            <div class="img__container">
                <img src="images/moment.png" alt="Anna Smith" />
            </div>

            <h2>Anna Smith</h2>
          
            <div class="f-about">
                <ul class="about">
                    <li>Phone :</li>
                    <li>Address :</li>
                    <br>
                    <br>
                    <li>Email :</li>
                    <li>Site :</li>
                    <br>
                    <br>
                    <li>Birthday :</li>
                    <li>Gender :</li>
                </ul>

                <ul class="about color">
                    <li>+976 790574393</li>
                    <li>Amman</li>
                    <br>
                    <br>
                    <li>hack@gmail.com</li>
                    <li>www.w3shoole.com</li>
                    <br>
                    <br>
                    <li>Attraction</li>
                    <li>Mail</li>
                </ul>
            </div>

           
        </div>
        <div class="right__col">
          <nav>
            <ul>
              <li><a href="">photos</a></li>
              <li><a href="">galleries</a></li>
              <li><a href="">groups</a></li>
            </ul>
            <button>Edit Profile</button>
          </nav>

          <div class="photos">
            <img src="images/WhatsApp Image 2023-01-24 at 3.16.07 PM (1).jpeg" alt="Photo" />
            <img src="images/WhatsApp Image 2023-01-24 at 3.16.27 PM.jpeg" alt="Photo" />
            <img src="images/WhatsApp Image 2023-01-24 at 3.15.43 PM (1).jpeg" alt="Photo" />
          </div>
        </div>
      </div>
    </div>

    @include('footer')
  </body>
</html>
