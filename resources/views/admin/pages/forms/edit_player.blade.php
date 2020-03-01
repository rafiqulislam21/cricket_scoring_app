<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin | Update Player</title>
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
                  <h4 class="card-title">Edit Player Informations</h4>
                  <form class="form-sample" action="{{route('adminController.playersUpdate', $id)}}" enctype="multipart/form-data" method="GET">
                    {{ csrf_field() }}
                    <p class="card-description">
                      Players informatiosn
                    </p>
                    <hr>


                    <div class="row px-5">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Name</label>
                          <div class="col-sm-9 ">
                            <input type="text" class="form-control" name="input_p_name" placeholder="Enter name..." value="{{$playersEdit['name']}}" required="true"/>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Profile photo</label>
                          <div class="col-sm-9">
                            <div class="form-group">
                              <input type="file" class="form-control-file" id="input_p_photo_edit" name="input_p_photo_edit" >
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Team</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="input_p_team_name" required>
                              <option value="{{$playersEdit['teamId']}}">{{$playersEditTeam['teamName']}}</option>
                              @foreach($teamsData as $row)
                              <option value="{{$row['id']}}">{{$row['teamName']}}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Play Role</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="input_p_role" required>
                              <option value="{{$playersEdit['playerRole']}}">{{$playersEdit['playerRole']}}</option>
                              <option value="batsman">Batsman</option>
                              <option value="bowler">Bowler</option>
                              <option value="all-rounder">All rounder</option>
                              <option value="w-keeper">W Keeper</option>
                            </select>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Status</label>
                          <div class="col-sm-9 ">
                            <input type="text" class="form-control" name="input_p_status" placeholder="Ex: 1/0" value="{{$playersEdit['status']}}" required="true"/>
                          </div>
                        </div>
                      </div>



                    </div>



                    <div class="float-right">
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <a href="{{route('players')}}" class="btn btn-light">Cancel</a>
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
