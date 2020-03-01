<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin | add Players</title>
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
                  <a href="#add_Gm" class="btn btn-outline-primary mr-2 float-right">Add</a>
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
            <!-- ================add fixtures============== -->
            <div class="col-12 grid-margin" id="add_Gm">
              <div class="card" >
                <div class="card-body">
                  <h4 class="card-title">ADD Players</h4>
                  <form class="form-sample" action="{{route('adminController.playersStore')}}" enctype="multipart/form-data" method="post" id="addFix">
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
                            <input type="text" class="form-control" name="input_p_name" placeholder="Enter name..." required="true"/>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Profile photo</label>
                          <div class="col-sm-9">
                            <div class="form-group">
                              <input type="file" class="form-control-file" id="input_p_photo" name="input_p_photo" >
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Team</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="input_p_team_name" required>
                              <option value="">Select</option>
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
                              <option value="">Select</option>
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
                            <input type="text" class="form-control" name="input_p_status" placeholder="Ex: 1/0" required="true"/>
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
