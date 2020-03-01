<nav class="navbar navbar-expand-lg navbar-light nav shadow">
  <a class="navbar-brand brand-logo mr-5" href="{{route('home')}}"><img src="{{asset('admin')}}/images/logo.png" class="mr-2" alt="logo"/></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto navUl">
      <li class="nav-item">
        <a class="nav-link active text-white" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="{{route('usertournament')}}">Tournaments</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="{{route('userfixtures')}}">Fixtures</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="{{route('matches')}}">Matches</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="{{route('userplayers')}}">Players</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="{{route('userteams')}}">Teams</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="{{route('feedback')}}">Feedback</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="{{route('contactus')}}">Contact Us</a>
      </li>
      
      <li class="nav-item">
        <a  href="{{route('home')}}"class="btn btn-outline-danger btn-sm"><i class="fas fa-sign-out-alt"></i> Logout</a>
      </li>
    </ul>

  </div>
</nav>

<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('loginUser')}}" method="GET">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
        <!-- <a href="{{route('allData')}}" class="btn btn-primary">submit</a> -->
        <button type="submit" class="btn btn-block btn-success btn-lg font-weight-medium">Submit</button>
      </form>
      </div>
    </div>
  </div>
</div>
