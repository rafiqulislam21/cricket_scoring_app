<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin | Update Game Manager</title>
  <!-- plugins:css -->
  @include('admin.partials.css')
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    @include('admin.partials.nav')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        @include('admin.partials.menu')
      </nav>
      <!-- partial -->


      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">

            <!-- ================add fixtures============== -->
            <div class="col-12 grid-margin" id="add_Gm">
              <div class="card" >
                <div class="card-body">
                  <h4 class="card-title">EDIT GAME MANAGER INFORMATIONS</h4>
                  <form class="form-sample" action="{{route('adminController.gamemanagersUpdate', $id)}}" method="GET">
                    {{ csrf_field() }}
                    <!-- csrf field -->
                    <p class="card-description">
                      Game Manager informatiosns
                    </p>
                    <hr>


                    <div class="row px-5">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Name</label>
                          <div class="col-sm-9 ">
                            <input type="text" class="form-control" name="input_g_name" placeholder="Enter name..." value="{{$game_managersEdit['name']}}" required/>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Email</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="input_g_email" placeholder="ex: demo123@example.com" value="{{$game_managersEdit['email']}}" required/>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Password</label>
                          <div class="col-sm-9">
                            <input type="password" class="form-control" name="input_g_password" placeholder="****" value="{{$game_managersEdit['password']}}" required/>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Phone</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="input_g_phone" placeholder="ex: 0192*********" value="{{$game_managersEdit['phone']}}"required/>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Address</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="input_g_address" placeholder="ex: ka-2, road-06, dhaka-1229" value="{{$game_managersEdit['address']}}" required/>
                          </div>
                        </div>
                      </div>


                    </div>



                    <div class="float-right">
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <a href="{{route('gamemanagers')}}" class="btn btn-light">Cancel</a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        @include('admin.partials.footer')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  @include('admin.partials.js')

</body>

</html>
