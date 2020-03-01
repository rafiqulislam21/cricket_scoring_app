<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin | add teams</title>
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
                  <a href="#add_team" class="btn btn-outline-primary mr-2 float-right">Add</a>
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
            <!-- ================add fixtures============== -->
            <div class="col-lg-12 grid-margin" id="add_team">
              <div class="card" >
                <div class="card-body">
                  <h4 class="card-title">ADD Team</h4>
                  <form class="form-sample" action="{{route('adminController.teamsStore')}}" method="post" enctype="multipart/form-data" id="addFix">
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
                            <input class="form-control" placeholder="ex: TigerBD " name="input_team_name"/>
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
                            <input class="form-control" placeholder="ex: TBD" name="input_team_short_name"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Team Status</label>
                          <div class="col-sm-9">
                            <input class="form-control" placeholder="ex: 1/0" name="input_team_status"/>
                          </div>
                        </div>
                      </div>
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
</body>

</html>
