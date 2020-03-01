<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin | add fixtures</title>
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
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">

                <div class="card-body">
                  <a href="#add_fixtures" class="btn btn-outline-primary mr-2 float-right">Add</a>
                  <h4 class="card-title ">Fixtures</h4>

                  <p class="card-description">
                    All fixtures
                  </p>

                  <hr>
                  @include('admin.partials.alerts')

                  <div class="table-responsive pt-3 overflow-auto" style="height:300px;">
                    <table class="table table-bordered">
                      <thead>
                        <tr>

                          <th>
                            F Id
                          </th>
                          <th>
                            Tournament Name
                          </th>
                          <th>
                            Team
                          </th>
                          <th>
                            Oponent Team
                          </th>
                          <th>
                            Venue
                          </th>
                          <th>
                            Date
                          </th>
                          <th>
                            Time
                          </th>
                          <th>
                            Match Type
                          </th>
                          <th>
                            Edit/Delete
                          </th>
                        </tr>
                      </thead>
                      <tbody>

                        @foreach($fixturesData as $row)

                        <tr>
                          <td>{{$row['id']}}</td>
                          <td>{{$row['tournament_id']}}</td>
                          <td>{{$row['team1Id']}}</td>
                          <td>{{$row['team2Id']}}</td>
                          <td>{{$row['venue']}}</td>
                          <td>{{$row['date']}}</td>
                          <td>{{$row['time']}}</td>
                          <td>{{$row['matchType']}}</td>
                          <td>
                            <a href="/fixtures/edit/{{$row['id']}}" class="p-2" style="color:yellow;"><i class="fas fa-edit"></i></a>
                            <a href="#deleteFix{{$row['id']}}" class="p-2" data-toggle="modal"  style="color:red;"><i class="fas fa-trash-alt"></i></a>

                            <!-- Delete Modal start -->
                            <div class="modal fade" id="deleteFix{{$row['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" style="color:red;"  id="exampleModalLabel"><i class="fas fa-exclamation-triangle"></i> Delete confirmation</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    Are you sure want to delete this?
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-danger btn-sm" data-dismiss="modal"><i class="fas fa-times"></i></button>
                                    <a role="button" href="/fixtures/delete/{{$row['id']}}" class="btn btn-outline-success btn-sm"><i class="fas fa-check"></i></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- Delete Modal end -->

                          </td>
                        </tr>
                        @endforeach







                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- ================add fixtures============== -->
            <div class="col-12 grid-margin" id="add_fixtures">
              <div class="card" >
                <div class="card-body">
                  <h4 class="card-title">ADD FIXTURES</h4>
                  <form class="form-sample"action="{{route('adminController.fixturesStore')}}" method="post" id="addFix">
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
                              <option value="">Select</option>
                              @foreach($fixturesTournamentsData as $row)
                              <option value="{{$row['id']}}">{{$row['match_type']}}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                      </div>
                      <!-- <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Last Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" />
                          </div>
                        </div>
                      </div> -->
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Team</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="input_team" required>
                              <option value="">Select</option>
                              @foreach($fixturesTeamsData as $row)
                              <option value="{{$row['id']}}">{{$row['teamName']}}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Oponent</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="input_team_op" required>
                              <option value="">Select</option>
                              @foreach($fixturesTeamsData as $row)
                              <option value="{{$row['id']}}">{{$row['teamName']}}</option>
                              @endforeach
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
                            <input type="text" class="form-control" name="input_venue" required/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Date</label>
                          <div class="col-sm-9">
                            <input class="form-control" placeholder="dd/mm/yyyy" name="input_date" required/>
                          </div>
                        </div>
                      </div>



                    </div>

                    <div class="row">

                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Match Type</label>
                          <div class="col-sm-4">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="radio_day_night" id="membershipRadios1" value="day" required>
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


                      </div>


                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Time</label>
                          <div class="col-sm-9">
                            <input class="form-control" placeholder="HH:MM AM/PM" name="input_time" required/>
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
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-light" type="button" onclick="myFunction()" value="Reset form">Cancel</button>
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

  <script>
    function myFunction() {
      document.getElementById("addFix").reset();
    }
  </script>
</body>

</html>
