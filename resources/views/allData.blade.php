<!DOCTYPE html>
<html>
  <head>
    <title>Game manager dashboard</title>
    <!-- css links -->
    @include('partials.css')

    <style media="screen">
      .bg{
        background-image: url('img/cricket.png');
      }
      h1{
        color: white;
      }
    </style>
  </head>
  <body>

    @include('partials.header')
    <!--End navigration  -->

    <!-- <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="{{asset('css/n')}}/logo.png" class="mr-2" alt="logo"/></a> -->
    <div class="bg">
      <div class="match">
        <b id="headTxt">Game manager Home page</b>
      </div>
      <div class="container">
        <center><a href="{{route('startMatch')}}" class="btn btn-outline-primary btn-lg">Start a match</a></center>
        <br><br>
        <center>
          <h1>Manage cricket match score Easily</h1>
          <h1>Save time</h1>
          <h1>Save money</h1>
          <button type="button" class="btn btn-success btn-sm">Add player</button>
          <button type="button" class="btn btn-success btn-sm">Add team</button>
          <button type="button" class="btn btn-warning btn-sm">Edit player</button>
          <button type="button" class="btn btn-warning btn-sm">Edit Team</button>
          <button type="button" class="btn btn-danger btn-sm">Delete player</button>
          <button type="button" class="btn btn-danger btn-sm">Delete team</button>

        </center>
        <br>
        <center><h2>Fixtures</h2></center>
        <div class="row">


    	 		<div class="table-responsive ">
    	 		<table class="table table-striped" style="color:white !important;">
    	 			<thead  style="background:rgba(0,191,255, 0.6)">
    	 			<tr>
    	 			<th scope="col">Match</th>
    	 			<th scope="col">Date</th>
    	 			<th scope="col">Live score</th>
    	 			</tr>
    	 			</thead>
    	 			<tbody style="background:rgba(255, 255, 255, 0.6)">

    	 			<!-- comented	============== -->
    	 		{{-- @foreach($matches as $match)

    	 			<tr>
    	 				<td>{{$match['0']}} vs {{$match['1']}}</td>
    	 				<td>{{$match['2']}}  {{$match['3']}}</td>
    	 				<td><a href="">Live score</a></td>
    	 			</tr>

    	 			@endforeach--}}

    	 			<!-- comented ===============-->
    	 <tr >
               <td>
                 	<table class="table table-borderless">
                     @foreach($teams as $team)
                     <tr>
                      <td>{{$team['0']}} vs {{$team['1']}}</td>
                      </tr>
                      @endforeach
                       </table>

                    </td>

            <td>
              <table class="table table-borderless">
            	@foreach($fixturesData as $fixture)
                <tr>
                    <td>{{$fixture['date']}} {{$fixture['time']}}</td>
                </tr>
                @endforeach
                 </table>
            </td>

              <td>
                 	<table class="table table-borderless">
                     @foreach($fixturesData as $fixture)
                     <tr>
                      <td><a href="">Live Score</a></td>
                      </tr>
                      @endforeach
                       </table>

                    </td>
                 </tr>

    	 			</tbody>
    	 		</table>
    	 		</div>
    	 	</div>


      </div>
        @include('admin.partials.footer')
    </div>


    <!-- js links-->
    @include('partials.js')


  </body>
</html>
