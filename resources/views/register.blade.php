
<link rel="stylesheet" type="text/css" href="CSS/register.css">
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

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

  <div class="main-content">
    <div class="container mt-7">
      <!-- Table -->
      <div class="row">
        <div class="col-xl-8 m-auto order-xl-1">
          <div class="card bg-secondary shadow">
            
            <h2 class="mb-5">Register</h2>
            @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            <div class="card-body">
              <form action="{{route('postsignup')}}" method="POST">
                @csrf
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-username">Username</label>
                        <input type="text" id="input-username" class="form-control form-control-alternative" name="name" placeholder="Username" >
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label>
                        <input type="email" id="input-email" class="form-control form-control-alternative" name="email" placeholder="jesse@example.com">
                      </div>
                    </div>
                  </div>
                 
                </div>
                <hr class="my-4">
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Contact information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-address">Address</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="Home Address"  type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-city">City</label>
                        <input type="text" id="input-city" class="form-control form-control-alternative" placeholder="City" >
                        <br>
                        <p>Already have account ?<a href="login">Login</a></p>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-city">password</label>
                        <input type="password" id="input-city" class="form-control form-control-alternative" name="password" placeholder="City" >
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4 text-right">
                    <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                </div>
                <!-- Description -->
                <hr class="my-4">
               
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 
@include('footer')

<script type="text/javascript" src="JS/log-reg.js"></script>

