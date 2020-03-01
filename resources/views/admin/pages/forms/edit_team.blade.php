<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin | Update team</title>
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
            <div class="col-lg-12 grid-margin" id="add_team">
              <div class="card" >
                <div class="card-body">
                  <h4 class="card-title">ADD Team</h4>
                  <form class="form-sample" action="{{route('adminController.teamsUpdate', $id)}}" enctype="multipart/form-data" method="GET" >
                    {{ csrf_field() }}
                    <p class="card-description">
                      Team informatiosns
                    </p>
                    <hr>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Team Name</label>
                          <div class="col-sm-9">
                            <input class="form-control" placeholder="ex: TigerBD " name="input_team_name" value="{{$teamsEdit['teamName']}}"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Team Logo</label>
                          <div class="col-sm-9">
                            <div class="form-group">
                              <input type="file" class="form-control-file" id="input_team_logo" name="input_team_logo">
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Short Name</label>
                          <div class="col-sm-9">
                            <input class="form-control" placeholder="ex: TBD" name="input_team_short_name" value="{{$teamsEdit['teamShortName']}}"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Team Status</label>
                          <div class="col-sm-9">
                            <input class="form-control" placeholder="ex: 1/0" name="input_team_status" value="{{$teamsEdit['status']}}"/>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="float-right">
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <a href="{{route('teams')}}" class="btn btn-light">Cancel</a>
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
