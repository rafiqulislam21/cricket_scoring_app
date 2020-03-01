<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin | add Game Managers</title>
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
            <!-- ================add fixtures============== -->
            <div class="col-12 grid-margin" id="add_Gm">
              <div class="card" >
                <div class="card-body">
                  <h4 class="card-title">ADD GAME MANAGER</h4>
                  <form class="form-sample" action="{{route('adminController.gamemanagersStore')}}" method="post" id="addFix">
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
                            <input type="text" class="form-control" name="input_g_name" placeholder="Enter name..." required/>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Email</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="input_g_email" placeholder="ex: demo123@example.com" required/>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Password</label>
                          <div class="col-sm-9">
                            <input type="password" class="form-control" name="input_g_password" placeholder="****" required/>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Phone</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="input_g_phone" placeholder="ex: 0192*********" required/>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Address</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="input_g_address" placeholder="ex: ka-2, road-06, dhaka-1229" required/>
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
