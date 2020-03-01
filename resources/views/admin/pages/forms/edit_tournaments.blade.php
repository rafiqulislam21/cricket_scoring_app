<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin | update tournament</title>
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
            <div class="col-lg-12 grid-margin" id="add_tournament">
              <div class="card" >
                <div class="card-body">
                  <h4 class="card-title">Edit TOURNAMENT</h4>
                  <form class="form-sample" action="{{ route('adminController.tournamentsUpdate', $id) }}" method="GET" >
                    {{ csrf_field() }}
                    <p class="card-description">
                      Tournament informatiosns
                    </p>
                    <hr>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Tournament Name</label>
                          <div class="col-sm-8">
                            <input class="form-control" placeholder="ex: Walton ODI series" name="input_tournament" value="{{$tournamentsEdit['match_type']}}"/>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Location</label>
                          <div class="col-sm-9">
                            <input class="form-control" placeholder="ex: Dhaka" name="input_tournament_location" value="{{$tournamentsEdit['Location']}}"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Total team</label>
                          <div class="col-sm-9">
                            <input class="form-control" placeholder="ex: 10" name="input_tournament_team" value="{{$tournamentsEdit['total_team']}}"/>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="float-right">
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <a href="{{route('tournaments')}}" class="btn btn-light">Cancel</a>
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

  </script>
</body>

</html>
