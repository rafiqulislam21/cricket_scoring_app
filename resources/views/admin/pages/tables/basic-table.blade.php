<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin | all tables</title>
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
          <!-- ===========fixtures=========== -->
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">

              <div class="card-body">
                <a href="{{route('fixtures')}}#add_fixtures" class="btn btn-outline-primary mr-2 float-right">Add</a>
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

          <!-- tournaments table======================================= -->
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">

              <div class="card-body">
                <a href="{{route('tournaments')}}#add_tournament" class="btn btn-outline-primary mr-2 float-right">Add</a>
                <h4 class="card-title ">Tournaments</h4>

                <p class="card-description">
                  All Tournament
                </p>

                <hr>
                  @include('admin.partials.alerts')

                <div class="table-responsive pt-3 overflow-auto" style="height:300px;">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>
                          T ID
                        </th>
                        <th>
                          Tournament Name
                        </th>
                        <th>
                          Location
                        </th>
                        <th>
                          Total Teams
                        </th>
                        <th>
                          created date
                        </th>
                        <th>
                          Edit/Delete
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($tournamentsData as $row)

                      <tr>
                        <td>{{$row['id']}}</td>
                        <td>{{$row['match_type']}}</td>
                        <td>{{$row['Location']}}</td>
                        <td>{{$row['total_team']}}</td>
                        <td>{{$row['created_time']}}</td>

                        <td>
                          <a href="/tournaments/edit/{{$row['id']}}" class="p-2" style="color:yellow;"><i class="fas fa-edit"></i></a>
                          <a href="#deleteTour{{$row['id']}}" class="p-2" data-toggle="modal"  style="color:red;"><i class="fas fa-trash-alt"></i></a>

                          <!-- Delete Modal start -->
                          <div class="modal fade" id="deleteTour{{$row['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                  <a role="button" href="/tournaments/delete/{{$row['id']}}" class="btn btn-outline-success btn-sm"><i class="fas fa-check"></i></a>
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

          <!-- add game manager=========================== -->

          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">

              <div class="card-body">
                <a href="{{route('gamemanagers')}}#add_Gm" class="btn btn-outline-primary mr-2 float-right">Add</a>
                <h4 class="card-title ">Game Managers</h4>

                <p class="card-description">
                  All Game Manager
                </p>

                <hr>
                  @include('admin.partials.alerts')

                <div class="table-responsive pt-3 overflow-auto" style="height:300px;">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>
                          #
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          Email
                        </th>
                        <th>
                          Phone
                        </th>
                        <th>
                          Address
                        </th>
                        <th>
                          Created time
                        </th>
                        <th>
                          Edit/Delete
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($gamemanagersData as $row)

                      <tr>
                        <td>{{$row['id']}}</td>
                        <td>{{$row['name']}}</td>
                        <td>{{$row['email']}}</td>
                        <!-- <td>{{$row['password']}}</td> -->
                        <td>{{$row['phone']}}</td>
                        <td>{{$row['address']}}</td>
                        <td>{{$row['created_time']}}</td>

                        <td>
                          <a href="/gamemanagers/edit/{{$row['id']}}" class="p-2" style="color:yellow;"><i class="fas fa-edit"></i></a>
                          <a href="#deleteMngr{{$row['id']}}" class="p-2" data-toggle="modal"  style="color:red;"><i class="fas fa-trash-alt"></i></a>

                          <!-- Delete Modal start -->
                          <div class="modal fade" id="deleteMngr{{$row['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                  <a role="button" href="/gamemanagers/delete/{{$row['id']}}" class="btn btn-outline-success btn-sm"><i class="fas fa-check"></i></a>
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

          <!-- team tables================== -->
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <a href="{{route('teams')}}#add_team" class="btn btn-outline-primary mr-2 float-right">Add</a>
                <h4 class="card-title ">Teams</h4>

                <p class="card-description">
                  All Team
                </p>

                <hr>
                  @include('admin.partials.alerts')

                <div class="table-responsive overflow-auto" style="height:300px;">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>
                          Team logo
                        </th>
                        <th>
                          Team name
                        </th>
                        <th>
                          Team short name
                        </th>
                        <th>
                          Team status
                        </th>
                        <td>
                          Created Time
                        </td>
                        <td>
                          Edit/Delete
                        </td>
                      </tr>
                    </thead>
                    <tbody>
                        <!-- <td class="py-1">
                          <img src="../../images/faces/face1.jpg" alt="image"/>
                        </td> -->
                        @foreach($teamsData as $row)

                        <tr>
                          <td><img src="{{asset('/admin/images/teams/'.$row['teamLogo'])}}" alt="image"/></td>
                          <td>{{$row['teamName']}}</td>
                          <td>{{$row['teamShortName']}}</td>
                          <td>{{$row['status']}}</td>
                          <td>{{$row['created_time']}}</td>

                          <td>
                            <a href="/teams/edit/{{$row['id']}}" class="p-2" style="color:yellow;"><i class="fas fa-edit"></i></a>
                            <a href="#deleteTeam{{$row['id']}}" class="p-2" data-toggle="modal"  style="color:red;"><i class="fas fa-trash-alt"></i></a>

                            <!-- Delete Modal start -->
                            <div class="modal fade" id="deleteTeam{{$row['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <a role="button" href="/teams/delete/{{$row['id']}}" class="btn btn-outline-success btn-sm"><i class="fas fa-check"></i></a>
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

          <!-- all players table================ -->
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">

              <div class="card-body">
                <a href="{{route('players')}}#add_Gm" class="btn btn-outline-primary mr-2 float-right">Add</a>
                <h4 class="card-title ">Players</h4>

                <p class="card-description">
                  All Players
                </p>

                <hr>
                  @include('admin.partials.alerts')

                <div class="table-responsive pt-3 overflow-auto" style="height:300px;">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>
                          #
                        </th>
                        <th>
                          Pro photo
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          Player Role
                        </th>
                        <th>
                          Team
                        </th>
                        <th>
                          Status
                        </th>
                        <th>
                          Creatd time
                        </th>
                        <th>
                          Edit/Delete
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($playersData as $row)

                      <tr>
                        <td>{{$row['id']}}</td>
                        <td><img src="{{asset('/admin/images/players/'.$row['profilePic'])}}" alt="image"/></td>
                        <td>{{$row['name']}}</td>
                        <td>{{$row['playerRole']}}</td>
                        <td>{{$row['teamId']}}</td>
                        <td>{{$row['status']}}</td>
                        <td>{{$row['created_time']}}</td>

                        <td>
                          <a href="/players/edit/{{$row['id']}}" class="p-2" style="color:yellow;"><i class="fas fa-edit"></i></a>
                          <a href="#deletePlayer{{$row['id']}}" class="p-2" data-toggle="modal"  style="color:red;"><i class="fas fa-trash-alt"></i></a>

                          <!-- Delete Modal start -->
                          <div class="modal fade" id="deletePlayer{{$row['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                  <a role="button" href="/players/delete/{{$row['id']}}" class="btn btn-outline-success btn-sm"><i class="fas fa-check"></i></a>
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

          <!-- feedback tables================== -->
          <div class="col-lg-12 grid-margin stretch-card" id="feedback">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title ">User Feedback</h4>

                <p class="card-description">
                  All Feedbacks
                </p>

                <hr>
                  @include('admin.partials.alerts')
                <div class="table-responsive pt-3 overflow-auto" style="height:300px;">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>
                          #
                        </th>
                        <th>
                          Avater
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          Email
                        </th>
                        <th>
                          Message
                        </th>
                        <th>
                          Date
                        </th>
                        <th>
                          Delete
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($feedbackData as $row)

                      <tr>
                        <td>{{$row['id']}}</td>
                        <td><img src="{{asset('/admin/images/user.png')}}" alt="image"/></td>
                        <td>{{$row['name']}}</td>
                        <td>{{$row['email']}}</td>
                        <td>{{$row['message']}}</td>
                        <td>{{$row['date']}}</td>

                        <td>
                          <!-- <a href="/players/edit/{{$row['id']}}" class="p-2" style="color:yellow;"><i class="fas fa-edit"></i></a> -->
                          <a href="#deleteFeed{{$row['id']}}" class="p-2" data-toggle="modal"  style="color:red;"><i class="fas fa-trash-alt"></i></a>

                          <!-- Delete Modal start -->
                          <div class="modal fade" id="deleteFeed{{$row['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                  <a role="button" href="/feedback/delete/{{$row['id']}}" class="btn btn-outline-success btn-sm"><i class="fas fa-check"></i></a>
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
