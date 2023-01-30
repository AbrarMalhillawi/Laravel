
<link rel="stylesheet" type="text/css" href="CSS/login.css">
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

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

  <div class="main-content">
    <div class="container mt-7">
      <!-- Table -->
      <div class="row2">
          <div class="col-xl-8 m-auto order-xl-1">
              <div class="card bg-secondary shadow">
                  
                <h2 class="mb-5">Login</h2>
                @if (count($errors) > 0)
                <?php redirect('login'); ?>
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                <div class="card-body">
                <form  action="{{route('postlogin')}}" method="POST">
                    @csrf
                    <div class="pl-lg-4">
                    <div class="row2">
                        <div class="col-lg-6">
                            <div class="form-group focused">
                                <label class="form-control-label" for="input-email">Email address</label>
                                <input type="email" id="input-email" class="form-control form-control-alternative" name="email" placeholder="jesse@example.com">
                            </div>
                        </div>
                    
                    </div>
                    <div class="row2">
                        <div class="col-lg-6">
                        <div class="form-group focused">
                            <label class="form-control-label" for="input-first-name">Password</label>
                            <input type="Password" id="input-first-name" class="form-control form-control-alternative" name="password" placeholder="First name" value="Lucky">
                            <br>
                            <p>Don't have account ?<a href="register">Register</a></p>
                        </div>
                        </div>
                        
                    </div>
                    </div>
                    <div class="col-4 text-right">
                        <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                    </div>
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

