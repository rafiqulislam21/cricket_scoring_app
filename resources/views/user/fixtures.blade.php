<!DOCTYPE html>
<html>
<head>
	<title>Fixtures</title>
	<!-- css links -->
	@include('partials.css')
</head>
<body>
	 @include('partials.headerUser')

	 <section>
       <div class=" bg-light">
         <h2 class=" font-weight-bold text-info  p-4 text-center ">Fixtures List</h2>
       </div>
     </section>

	 <div class="container bg-light">
	 	<div class="row">
	 		<div class="table-responsive">
	 		<table class="table shadow-sm">
	 			<thead class="thead bg-info text-white">
	 			<tr >
	 			<th>Series</th>
	 			<th>Match</th>
	 			<th>Date</th>
	 			<th>Vanue</th>
	 			<th>Type</th>

	 			</tr>
	 			</thead>
	 			<tbody>

	 	<tr >

	 		 <td>
             	<table class="table table-responsive table-borderless">
                 @foreach($tournaments as $tournament)
                 <tr>
                  <td>{{$tournament['0']}}</td>
                  </tr>
                  @endforeach
                   </table>

                </td>

           <td>
             	<table class="table table-responsive table-borderless">
                 @foreach($teams as $team)
                 <tr>
                  <td>{{$team['0']}} vs {{$team['1']}}</td>
                  </tr>
                  @endforeach
                   </table>

                </td>

        <td>
          <table class="table table-responsive table-borderless">
        	@foreach($fixturesData as $fixture)
            <tr>
                <td>{{$fixture['date']}} {{$fixture['time']}}</td>
            </tr>
            @endforeach
             </table>
        </td>

                 <td>
             	<table class="table table-responsive table-borderless">
                 @foreach($fixturesData as $fixture)
                 <tr>
                  <td>{{$fixture['venue']}}</td>
                  </tr>
                  @endforeach
                   </table>

                </td>

                <td>
             	<table class="table table-responsive table-borderless">
                 @foreach($fixturesData as $fixture)
                 <tr>
                  <td>{{$fixture['matchType']}}</td>
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
	 <!-- js links-->
	 @include('partials.js')
</body>
</html>
