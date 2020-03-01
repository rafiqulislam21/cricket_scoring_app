<!DOCTYPE html>
<html>
<head>
	<title>Tournaments</title>
	<!-- css links -->
	@include('partials.css')
</head>
<body>
	 @include('partials.headerUser')

	 <section>
       <div class=" bg-light">
         <h2 class=" font-weight-bold text-info  p-4 text-center ">Tournament List</h2>
       </div>
     </section>

	 <div class="container bg-light">
	 	<div class="row">
	 		<div class="table-responsive">
	 		<table class="table shadow-sm table-striped">
	 			<thead class="thead bg-info text-white">
	 			<tr>
	 			<th>Tournament Name</th>
	 			<th>Location</th>
	 			<th>Total Team</th>
	 			<th>Start Date</th>

	 			</tr>
	 			</thead>
	 			<tbody>
	 	@foreach($tournamentData as $row)
	 	<tr >
      <td>{{$row['match_type']}}</td>
      <td>{{$row['Location']}}</td>
      <td>{{$row['total_team']}}</td>
      <td>{{$row['created_time']}}</td>
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
