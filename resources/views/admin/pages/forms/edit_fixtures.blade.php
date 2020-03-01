<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin | Update fixture</title>
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
            <!-- ================update fixtures============== -->
            <div class="col-12 grid-margin" id="add_fixtures">
              <div class="card" >
                <div class="card-body">
                  <h4 class="card-title">Update FIXTURES</h4>
                  <form class="form-sample" action="{{ route('adminController.fixturesUpdate', $id) }}" method="GET">

                    {{ csrf_field() }}
                    <p class="card-description">
                      Fixture informatiosns
                    </p>
                    <hr>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Tournament Name</label>
                          <div class="col-sm-7">
                            <select class="form-control" name="input_tournament_name" required>
                              <option value="{{$fixturesEdit['tournament_id']}}">{{$fixturesTournaments['match_type']}}</option>
                              <option value="1">walton one day series</option>
                              <option value="2">sony t20</option>
                            </select>
                          </div>
                        </div>
                      </div>

                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Team</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="input_team" required>
                              <option value="{{$fixturesEdit['team1Id']}}">{{$fixturesTeam1['teamName']}}</option>
                              <option value="1">Bangladesh</option>
                              <option value="2">Australia</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Oponent</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="input_team_op" required>
                              <option value="{{$fixturesEdit['team2Id']}}">{{$fixturesTeam2['teamName']}}</option>
                              <option value="1">Bangladesh</option>
                              <option value="2">Australia</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Venue</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="input_venue" value="{{$fixturesEdit['venue']}}" required/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Date</label>
                          <div class="col-sm-9">
                            <input class="form-control" placeholder="dd/mm/yyyy" name="input_date" value="{{$fixturesEdit['date']}}" required/>
                          </div>
                        </div>
                      </div>

                    </div>

                    <div class="row">

                      <div class="col-md-6">
                        <!-- {{$fixturesEdit['matchType']}} -->
                        @if($fixturesEdit['matchType']=='night')
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Match Type</label>
                          <div class="col-sm-4">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="radio_day_night" id="membershipRadios1" value="day"  required>
                                Day
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-5">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="radio_day_night" id="membershipRadios2" value="night" checked required>
                                Night
                              </label>
                            </div>
                          </div>
                        </div>
                        @else
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Match Type</label>
                          <div class="col-sm-4">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="radio_day_night" id="membershipRadios1" value="day" checked  required>
                                Day
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-5">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="radio_day_night" id="membershipRadios2" value="night" required>
                                Night
                              </label>
                            </div>
                          </div>
                        </div>
                        @endif


                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Time</label>
                          <div class="col-sm-9">
                            <input class="form-control" placeholder="HH:MM AM/PM" name="input_time" value="{{$fixturesEdit['time']}}" required/>
                          </div>
                        </div>
                      </div>
                      <!-- <div class="col-md-1">
                        <div class="form-group row">
                          <select class="form-control" name="input_am_pm">
                            <option>Select</option>
                            <option value="AM">AM</option>
                            <option value="PM">PM</option>
                          </select>
                        </div>
                      </div> -->

                    </div>


                    <div class="float-right">
                      <button type="submit" class="btn btn-primary mr-2">Update</button>
                      <a href="{{route('fixtures')}}" class="btn btn-light">Cancel</a>
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
