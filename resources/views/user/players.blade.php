<!DOCTYPE html>
<html>
<head>
	<title>Players</title>
	<!-- css links -->
	@include('partials.css')
</head>
<body>
	@include('partials.headerUser')

	<section>
       <div class=" bg-light">
         <h2 class=" font-weight-bold text-info  p-4 text-center ">Players List</h2>
       </div>
     </section>

	 <div class="container bg-light">

	 	<div class="row">
	 		<div class="table-responsive overflow-auto" style="height:400px;">
	 		<table class="table shadow-sm">
	 			<thead class="thead bg-info text-white">
	 			<tr>
	 			<th>id</th>
	 			<th>Name</th>
	 			<th>Team Name</th>
	 			<th>Role</th>
	 			<th>Imgage</th>

	 			</tr>
	 			</thead>
	 			<tbody>

	 	<tr >

	 		 <td>
             	<table class="table table-responsive table-borderless">
                 @foreach($players as $player)
                 <tr>
                  <td>{{$player['id']}}</td>
                  </tr>
                  @endforeach
                   </table>

                </td>

          <td>
             	<table class="table table-responsive table-borderless">
                 @foreach($players as $player)
                 <tr>
                  <td>{{$player['name']}}</td>
                  </tr>
                  @endforeach
                   </table>

                </td>

        <td>
          <table class="table table-responsive table-borderless">
        	@foreach($teamNames as $teamName)
            <tr>
                <td>{{$teamName['0']}}</td>
            </tr>
            @endforeach
             </table>
        </td>

                 <td>
             	<table class="table table-responsive table-borderless">
                 @foreach($players as $player)
                 <tr>
                  <td>{{$player['playerRole']}}</td>
                  </tr>
                  @endforeach
                   </table>

                </td>

                 <td>
             	<table class="table table-responsive table-borderless">
                 @foreach($players as $player)
                 <tr>
                  <td><img style="height: 20px; width: 20px;" src="{{asset('/admin/images/players/'.$player['profilePic'])}}"></td>
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
