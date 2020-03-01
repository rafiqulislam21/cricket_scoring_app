<!DOCTYPE html>
<html>
<head>
	<title>Teams</title>
	<!-- css links -->
	@include('partials.css')
</head>
<body>
	 @include('partials.headerUser')

	 <section>
       <div class=" bg-light">
         <h2 class=" font-weight-bold text-info  p-4 text-center ">Teams List</h2>
       </div>
     </section>

	 <div class="container bg-light">
	 	<div class="row">
	 		<div class="table-responsive ">
	 		<table class="table shadow-sm table-striped">
	 			<thead class="thead bg-info text-white">
	 			<tr>
	 			<th>Team Name</th>
	 			<th>Team Short Name</th>
	 			<th>Logo</th>
	 			</tr>
	 			</thead>
	 			<tbody>
	 	@foreach($teams as $team)
	 	<tr >
      <td><a href="#">{{$team['teamName']}}</a></td>
      <td>{{$team['teamShortName']}}</td>
      <td><img style="height: 20px; width: 20px;" src="{{asset('/admin/images/teams/'.$team['teamLogo'])}}"></td>
    </tr>

   @endforeach

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
