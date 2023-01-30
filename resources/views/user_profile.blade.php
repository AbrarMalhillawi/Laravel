
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


<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

  <div class="main-content">
    <!-- Top navbar -->
    {{-- <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="https://www.creative-tim.com/product/argon-dashboard" target="_blank">User profile</a>
        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control" placeholder="Search" type="text">
            </div>
          </div>
        </form>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="https://demos.creative-tim.com/argon-dashboard/assets-old/img/theme/team-4.jpg">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold">Jessica Jones</span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="../examples/profile.html" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              <a href="../examples/profile.html" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Settings</span>
              </a>
              <a href="../examples/profile.html" class="dropdown-item">
                <i class="ni ni-calendar-grid-58"></i>
                <span>Activity</span>
              </a>
              <a href="../examples/profile.html" class="dropdown-item">
                <i class="ni ni-support-16"></i>
                <span>Support</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#!" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav> --}}
    <!-- Header -->
    {{-- {{$res}} --}}
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 260px; background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
   
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
          <div class="card card-profile shadow">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="images/WhatsApp Image 2023-01-24 at 3.16.06 PM.jpeg" class="rounded-circle">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
              <div class="d-flex justify-content-between">
              </div>
            </div>
            <div class="card-body pt-0 pt-md-4">
                 <pre>        

                 </pre>
              <div class="text-center">
                <h3>
                  Jack Alloussi<span class="font-weight-light">, 19</span>
                </h3>
                <div class="h5 font-weight-300">
                  <i class="ni location_pin mr-2"></i>Bucharest, Romania
                </div>
                <div class="h5 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i>software engineer - zaytoon University
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">My account</h3>
                </div>
                <div class="col-4 text-right">
                  <button class="btn btn-sm btn-primary" onclick="edit()">Edit</button>
                  <button class="btn btn-sm btn-primary" onclick="history()">History</button>
                  
                </div>
              </div>
            </div>

            <div id="edit">
              <div class="card-body">
                <form>
                  <h6 class="heading-small text-muted mb-4">User information</h6>
                  <div class="pl-lg-4">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group focused">
                          <label class="form-control-label" for="input-username">Username</label>
                          <input type="text" id="input-username" class="form-control padding form-control-alternative" placeholder="Username" value="lucky.jesse">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-email">Email address</label>
                          <input type="email" id="input-email" class="form-control padding form-control-alternative" placeholder="jesse@example.com">
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
                          <input id="input-address" class="form-control padding form-control-alternative" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09" type="text">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="form-group focused">
                          <label class="form-control-label" for="input-city">City</label>
                          <input type="text" id="input-city" class="form-control padding form-control-alternative" placeholder="City" value="New York">
                        </div>
                        <div class="form-group focused">
                            <button type="submit" class="btn btn-sm btn-primary">submit</button>
                        </div>
                      </div>
                
                    
                    </div>
                  </div>
                </form>
              </div>
            </div>

            <div id="history">
              <div class="card-body">
                          <form>
                            <h6 class="heading-small text-muted mb-4">History</h6>
                           
                            <hr class="my-4">
                            <!-- Address -->
                            <div class="pl-lg-4">
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group focused">
                                    @foreach (json_decode($res) as $re)
                                    <div id="input-address" class="form-control form-control-alternative"> 
                                      <div class="test">
                                        <p> your resrvation At <strong>{{$re->event_name}}</strong> was </p>
                                        @if ($re->status == 'bending')
                                          <button class="Waiting">bending</button>
                                          @elseif ($re->status == 'decline')
                                          <button class="NotAprove"> rejected</button>
                                          @elseif ($re->status == 'approved')
                                          <button class="Aprove">confirmd</button>
                                          @endif
                                        </div>
                                    </div>
                                    @endforeach

                                  </div>
                                </div>
                              </div>

                            </div>
                          </form>
                        </div>


                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            {{-- user ID --}}
            @if (session('user'))
            <input  type="hidden" id="user"  name="user" value="{{session('user')->id}}">
            @endif
            <script>
                
                // let userId = document.getElementById('user');
                let editBtn = document.getElementById('edit');
                let historyBtn = document.getElementById('history');
                // console.log(userId)
                function edit() {

                  editBtn.style.display= "block";
                  historyBtn.style.display= "none";

                }
                
                function history() {

                  editBtn.style.display= "none";
                  historyBtn.style.display= "block";

                }
                // console.log('hello')
                // async function getUsers() {
                // let url = 'http://127.0.0.1:8000/api/books';
                // try {
                //     let res = await fetch(url);
                //     return await res.json();
                // } catch (error) {
                //     console.log(error);
                // }
                // }
                // async function renderUsers() {
                // let books = await getUsers();
                //   let status = books.filter(e => e.user_id == userId)
                // }
                // renderUsers()
            </script>
 
    @include('footer')
  </body>
</html>
