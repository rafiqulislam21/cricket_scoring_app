<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Login</title>
  <!-- plugins:css -->
    @include('admin.partials.css')
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth lock-full-bg">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-transparent text-left p-5 text-center">
              <img src="img/manager.jpg" class="lock-profile-img" alt="img">

              <form class="pt-5" action="{{route('loginAdmin')}}" method="GET">
                <div class="form-group">
                  <label for="examplePassword1">Admin Login</label>
                  <input style="color:white !important;" type="email" class="form-control text-center" id="exampleemail" placeholder="email" name="email" required>
                  <input style="color:white !important;" type="password" class="form-control text-center" id="examplePassword1" placeholder="Password" name="password" required>
                </div>
                <div class="mt-5">
                  <button type="submit" class="btn btn-block btn-success btn-lg font-weight-medium">Submit</button>
                  <!-- <a class="btn btn-block btn-success btn-lg font-weight-medium" href="{{route('adminDashboard')}}">Login</a> -->
                </div>
                @include('admin.partials.alerts')
                <div class="mt-3 text-center">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  @include('admin.partials.js')
  <!-- endinject -->
</body>

</html>
