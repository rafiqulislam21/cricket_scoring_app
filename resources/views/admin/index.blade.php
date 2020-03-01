<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Cricket Home Admin Panel</title>
  <!-- plugins:css -->
    @include('admin.partials.css')

    <style media="screen">
      .dgn:hover{
        transform: scale(1.2);
      	transition: transform .5s;
      }
    </style>

</head>
<body>

  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
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
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h4 class="font-weight-bold mb-0">Cricket-home Admin Dashboard</h4>
                </div>
                <div>
                    <!-- <button type="button" class="btn btn-primary btn-icon-text btn-rounded">
                      <i class="ti-clipboard btn-icon-prepend"></i>Report
                    </button> -->
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card dgn">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">Fixtures</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">{{$totalFixtures}}</h3>
                    <i class="ti-calendar icon-md text-muted mb-0 mb-md-3 mb-xl-0" style="color:#3CB371 !important;"></i>
                  </div>
                  <!-- <p class="mb-0 mt-2 text-danger">0.12% <span class="text-black ml-1"><small>(30 days)</small></span></p> -->
                </div>
              </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card dgn">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">Tournaments</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">{{$totalTournaments}}</h3>
                    <i class="ti-cup icon-md text-muted mb-0 mb-md-3 mb-xl-0" style="color:#4169E1 !important;"></i>
                  </div>
                  <!-- <p class="mb-0 mt-2 text-danger">0.47% <span class="text-black ml-1"><small>(30 days)</small></span></p> -->
                </div>
              </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card dgn">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">Teams</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">{{$totalTeams}}</h3>
                    <i class="fas fa-user-friends icon-md text-muted mb-0 mb-md-3 mb-xl-0" style="color:#4B0082 !important;"></i>
                  </div>
                  <!-- <p class="mb-0 mt-2 text-success">64.00%<span class="text-black ml-1"><small>(30 days)</small></span></p> -->
                </div>
              </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card dgn">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">Players</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">{{$totalPlayers}}</h3>
                    <i class="fas fa-users icon-md text-muted mb-0 mb-md-3 mb-xl-0" style="color:#DC143C !important;"></i>
                  </div>
                  <!-- <p class="mb-0 mt-2 text-success">23.00%<span class="text-black ml-1"><small>(30 days)</small></span></p> -->
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card dgn">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">Matches</p>
                  <!-- all match and recent match list -->
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">{{$totalMatches}}</h3>
                    <i class="fas fa-clipboard-list icon-md text-muted mb-0 mb-md-3 mb-xl-0" style="color:#FF4500 !important;"></i>
                    <!-- <i class="ti-calendar icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i> -->
                  </div>
                  <!-- <p class="mb-0 mt-2 text-danger">0.12% <span class="text-black ml-1"><small>(30 days)</small></span></p> -->
                </div>
              </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card dgn">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">Game Managers</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">{{$totalGame_managers}}</h3>
                    <i class="fas fa-user-tie icon-md text-muted mb-0 mb-md-3 mb-xl-0" style="color:#FFFF00 !important;"></i>
                  </div>
                  <!-- <p class="mb-0 mt-2 text-danger">0.47% <span class="text-black ml-1"><small>(30 days)</small></span></p> -->
                </div>
              </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card dgn">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">Online</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">2</h3>
                    <i style="color:#00FF00;" class="fas fa-circle icon-md mb-0 mb-md-3 mb-xl-0"></i>
                  </div>
                  <!-- <p class="mb-0 mt-2 text-success">64.00%<span class="text-black ml-1"><small>(30 days)</small></span></p> -->
                </div>
              </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card dgn">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">Visits</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">200</h3>
                    <i class="ti-eye icon-md text-muted mb-0 mb-md-3 mb-xl-0" style="color:#00BFFF !important;"></i>
                  </div>
                  <!-- <p class="mb-0 mt-2 text-success">23.00%<span class="text-black ml-1"><small>(30 days)</small></span></p> -->
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <!-- <div class="card">
                <div class="card-body">
                  <p class="card-title">Sales details</p>
                  <p class="text-muted font-weight-light">Received overcame oh sensible so at an. Formed do change merely to county it. Am separate contempt domestic to to oh. On relation my so addition branched.</p>
                  <div id="sales-legend" class="chartjs-legend mt-4 mb-2"></div>
                  <canvas id="sales-chart"></canvas>
                </div>
                <div class="card border-right-0 border-left-0 border-bottom-0">
                  <div class="d-flex justify-content-center justify-content-md-end">
                    <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                      <button class="btn btn-lg btn-outline-light dropdown-toggle rounded-0 border-top-0 border-bottom-0" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Today
                      </button>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                        <a class="dropdown-item" href="#">January - March</a>
                        <a class="dropdown-item" href="#">March - June</a>
                        <a class="dropdown-item" href="#">June - August</a>
                        <a class="dropdown-item" href="#">August - November</a>
                      </div>
                    </div>
                    <button class="btn btn-lg btn-outline-light text-primary rounded-0 border-0 d-none d-md-block" type="button"> View all </button>
                  </div>
                </div>
              </div> -->

                <!-- <div class="col-md-12 grid-margin stretch-card"> -->
                  <div class="card">
                    <div class="card-body">
                      <p class="card-title">Detailed Reports</p>
                      <div class="col-md-12 col-xl-12 d-flex flex-column justify-content-center">
                        <div class="ml-xl-4">
                          <h1>{{$totalMatches}}</h1>
                          <h3 class="font-weight-light mb-xl-4">Matches</h3>
                          <p class="text-muted mb-2 mb-xl-0">Total number of cricket match completed using this website are 200. There are other details about match, tournament in the right side table.</p>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl-9">
                        <div class="row">
                          <!-- <div class="col-md-6 mt-3 col-xl-5">
                            <canvas id="north-america-chart"></canvas>
                            <div id="north-america-legend"></div>
                          </div> -->

                          <div class="col-md-12 col-xl-12">
                            <div class="table-responsive mb-3 mb-md-0">
                              <table class="table table-borderless report-table">
                                <tr>
                                  <td class="text-muted">One Day</td>
                                  <td class="w-100 px-0">
                                    <div class="progress progress-md mx-4">
                                      <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                  </td>
                                  <td><h5 class="font-weight-bold mb-0">6</h5></td>
                                </tr>
                                <tr>
                                  <td class="text-muted">T20</td>
                                  <td class="w-100 px-0">
                                    <div class="progress progress-md mx-4">
                                      <div class="progress-bar bg-primary" role="progressbar" style="width: 60%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                  </td>
                                  <td><h5 class="font-weight-bold mb-0">12</h5></td>
                                </tr>
                                <tr>
                                  <td class="text-muted">Test</td>
                                  <td class="w-100 px-0">
                                    <div class="progress progress-md mx-4">
                                      <div class="progress-bar bg-primary" role="progressbar" style="width: 10%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                  </td>
                                  <td><h5 class="font-weight-bold mb-0">2</h5></td>
                                </tr>

                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <!-- </div> -->

            </div>


            <div class="col-md-6 grid-margin stretch-card">
              <div class="card border-bottom-0">
                <div class="card-body pb-0">
                  <p class="card-title">Overview</p>
                  <p class="text-muted font-weight-light">This chart shows the overview of users activity and their numbers.</p>
                  <div class="d-flex flex-wrap mb-5">
                    <div class="mr-5 mt-3">
                      <p class="text-muted">Total user</p>
                      <h3>4</h3>
                    </div>
                    <div class="mr-5 mt-3">
                      <p class="text-muted">New users</p>
                      <h3>2</h3>
                    </div>
                    <div class="mr-5 mt-3">
                      <p class="text-muted">Regular user</p>
                      <h3>2</h3>
                    </div>
                    <div class="mt-3">
                      <p class="text-muted">Feedbacks</p>
                      <h3>6</h3>
                    </div>
                  </div>
                </div>
                <canvas id="order-chart" class="w-100"></canvas>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-md-7 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-0">Recent Matches</p>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Tournament Name</th>
                          <th>Fixture</th>
                          <th>Date</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>walton ODI series</td>
                          <td>T11 vs TB</td>
                          <td>30 July, 2019</td>
                          <td><label class="badge badge-danger">Tie</label></td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>walton ODI series</td>
                          <td>TB vs KS</td>
                          <td>30 July, 2019</td>
                          <td><label class="badge badge-warning">In progress</label></td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>walton ODI series</td>
                          <td>KS vs TDG</td>
                          <td>30 July, 2019</td>
                          <td><label class="badge badge-info">Up comming</label></td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td>walton ODI series</td>
                          <td>MHC vs DCC</td>
                          <td>30 July, 2019</td>
                          <td><label class="badge badge-success">Completed</label></td>
                        </tr>


                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <!-- todo list================== -->
            <div class="col-md-5 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">To Do Lists (Take quick notes)</h4>
									<div class="list-wrapper pt-2">
										<ul class="d-flex flex-column-reverse todo-list todo-list-custom">
											<li>
												<div class="form-check form-check-flat">
													<label class="form-check-label">
														<input class="checkbox" type="checkbox">
														Next match will start at 2.00 pm.
													</label>
												</div>
												<i class="remove ti-trash"></i>
											</li>
											<li class="completed">
												<div class="form-check form-check-flat">
													<label class="form-check-label">
														<input class="checkbox" type="checkbox" >
														Tomorow new fixtures will be added.
													</label>
												</div>
												<i class="remove ti-trash"></i>
											</li>
											<li>
												<div class="form-check form-check-flat">
													<label class="form-check-label">
														<input class="checkbox" type="checkbox">
														some fake users must me remove after lunch time.
													</label>
												</div>
												<i class="remove ti-trash"></i>
											</li>
											<li class="completed">
												<div class="form-check form-check-flat">
													<label class="form-check-label">
														<input class="checkbox" type="checkbox" >
														my user name: user123
													</label>
												</div>
												<i class="remove ti-trash"></i>
											</li>
											<li>
												<div class="form-check form-check-flat">
													<label class="form-check-label">
														<input class="checkbox" type="checkbox">
														New tournament will start at 1st November.
													</label>
												</div>
												<i class="remove ti-trash"></i>
											</li>
										</ul>
                  </div>
                  <div class="add-items d-flex mb-0 mt-4">
										<input type="text" class="form-control todo-list-input mr-2"  placeholder="Add new task">
										<button class="add btn btn-icon text-primary todo-list-add-btn bg-transparent"><i class="ti-location-arrow"></i></button>
									</div>
								</div>
							</div>
            </div>
          </div>


        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
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
