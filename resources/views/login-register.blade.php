
<link rel="stylesheet" type="text/css" href="CSS/log-reg.css">
<link rel="stylesheet" type="text/css" href="CSS/style.css">

<style>
    .Contact,.Home,.About,.Events{
        background-color: none;
    }
    .Login {
        background-color: #E53854;
    }
</style>

<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">

@include('navbar')
    <div class="body">
        <div class="cont">
            <div class="form sign-in">
            <h2>Login</h2>
            <label>
                <span>Email</span>
                <input type="email" name="email">
            </label>
            <label>
                <span>Password</span>
                <input type="password" name="password">
            </label>
            <button class="submit" type="button">Sign In</button>
            <p class="forgot-pass">Forgot Password ?</p>

            <div class="social-media">
                <ul>
                <li><img src="images/facebook.png"></li>
                <li><img src="images/twitter.png"></li>
                <li><img src="images/linkedin.png"></li>
                <li><img src="images/instagram.png"></li>
                </ul>
            </div>
            </div>

            <div class="sub-cont">
            <div class="img">
                <div class="img-text m-up">
                <h2>New here?</h2>
                <p>Sign up and discover great amount of new opportunities!</p>
                </div>
                <div class="img-text m-in">
                <h2>One of us?</h2>
                <p>If you already has an account, just sign in. We've missed you!</p>
                </div>
                <div class="img-btn">
                <span class="m-up">Register</span>
                <span class="m-in">Login</span>
                </div>
            </div>
            <div class="form sign-up">
                <h2>Register</h2>
                <label class="name">
                    <span>First Name</span>
                    <input type="text">
                </label>

                <label class="name">
                    <span>Last Name</span>
                    <input type="text">
                </label>
                <br>
                <label class="e-p">
                    <span>Email</span>
                    <input type="email">
                </label>
                <br>
                <label class="e-p">
                    <span>Password</span>
                    <input type="password">
                </label>
                <br>
                <label class="e-p">
                    <span>Confirm Password</span>
                    <input type="password">
                </label>

                <button type="button" class="submit">Sign Up Now</button>
            </div>
            </div>
        </div>
    </div>

@include('footer')

<script type="text/javascript" src="JS/log-reg.js"></script>

