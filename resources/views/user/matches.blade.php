<!DOCTYPE html>
<html>
<head>
	<title>Matches</title>
	<!-- css links -->
	@include('partials.css')
</head>
<body>
	@include('partials.headerUser')

	<section>
       <div class=" bg-light">
         <h2 class=" font-weight-bold text-info  p-4 text-center ">Live matches</h2>
       </div>
     </section>


	 <div class="container bg-light">

    <div class="row">
      <div class="table-responsive">
      <table class="table shadow-sm">
        <thead class="thead bg-info text-white">
        <tr>
        <th>Match</th>
        <th>Date</th>
        <th>Live score</th>
        </tr>
        </thead>
        <tbody>

        <!-- comented ============== -->
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
                  @php
                  $i=0;
                  @endphp
                 @foreach($teams as $team)
                 <tr>
                  @if($i==0)
                  <td>{{$team['0']}} vs {{$team['1']}}</td>
                   @endif
                  </tr>
                  @php $i++; @endphp
                  @endforeach

                   </table>

                </td>

        <td>
          <table class="table table-borderless">
                @php
                  $i=0;
                  @endphp
          @foreach($fixturesData as $fixture)
            <tr>

              @if($i==0)
                <td>{{$fixture['date']}} {{$fixture['time']}}</td>
                 @endif
            </tr>
             @php $i++; @endphp
            @endforeach
             </table>
        </td>

          <td>
              <table class="table table-borderless">
                 @php
                  $i=0;
                  @endphp
                 @foreach($fixturesData as $fixture)
                 <tr>
                   @if($i==0)
                  <td><a href="{{route('livescore')}}">Live Score</a></td>
                     @endif
                  </tr>
                  @php $i++; @endphp
                  @endforeach
                   </table>

                </td>
             </tr>

        </tbody>
      </table>
      </div>
    </div>

         <section>
       <div class=" bg-light">
         <h2 class=" font-weight-bold text-info  p-4 text-center ">Upcoming matches</h2>
       </div>
     </section>

	 	<div class="row">
	 		<div class="table-responsive">
	 		<table class="table shadow-sm">
	 			<thead class="thead bg-info text-white">
	 			<tr>
	 			<th>Match</th>
	 			<th>Date</th>
	 			<th>Time</th>
	 			</tr>
	 			</thead>
	 			<tbody>

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
                <td>{{$fixture['date']}}</td>
            </tr>
            @endforeach
             </table>
        </td>

           <td>
          <table class="table table-borderless">
          @foreach($fixturesData as $fixture)
            <tr>
                <td> {{$fixture['time']}}</td>
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
