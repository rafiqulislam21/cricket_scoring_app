<!DOCTYPE html>
<html>
  <head>
    <title>Live match informations</title>
    <!-- css links -->
    @include('partials.css')
  </head>
  <body>

    @include('partials.header')
    <!--End navigration  -->
    <div class="match">
      <b id="headTxt">Match Information</b>
    </div>
    <!-- <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="{{asset('css/n')}}/logo.png" class="mr-2" alt="logo"/></a> -->
    <div class="container">
     <div class="card-deck " style=" margin:40px;">
      <div class="card shadow p-3 mb-5" style=" padding: 15px; ">
       <div class="card-body">
         <form action="{{route('matchDetails.store')}}" method="post">
           {{ csrf_field() }}
           <div id="matchDiv" style="display: block;">
             <div>
                <h5 class="pb-4">General information</h5>
              <div class="row mb-4">
                <div class="col-md-2 control-label">
                  <label for="gender1" >Season</label>
                </div>

                <div class="col-md-4">
                  <select class="form-control">
                    <option value="">Select Season</option>
                    <option value="1">2019</option>
                    <option value="2">2020</option>
                    <option value="3">2021</option>
                    <option value="4">2022</option>
                  </select>
                </div>

              </div>

              <div class="row mb-2">
                <div class="col-md-2 control-label">
                  <label for="gender1" >Match Type</label>
                </div>
                <div class="col-md-6">
                  <select class="form-control" name="match_type_drop" >
                    <option value="">Select Match</option>
                    @foreach($tournamentsDetails as $row)
                    <option value="{{$row['id']}}">{{$row['match_type']}}</option>
                    @endforeach
                  </select>
                </div>

              </div>
              <hr>
              <h5 class="pb-4">Team Details</h5>
              <div class="row mb-2">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                  <div class="row">
                    <div class="col-md-4 control-label">
                      <label  class="card-text" >Club/Country</label>
                    </div>
                    <div class="col-md-6">
                      <select class="form-control teamAjax"  name="team_drop">
                        <option value="">Select Team</option>
                        @foreach($teamDetails as $row)
                        <option value="{{$row['id']}}">{{$row['teamName']}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <!--select batting/ bowling radio-->
                  <div class="row mt-3">
                    <div class="col-md-4">
                       <label  class="" >Bating/Bowling</label>
                    </div>
                    <div class="col-md-6 ">
                       <label class="radio-inline pr-3">
                         <input type="radio" name="batting" value="Batting">Batting
                       </label>
                      <label class="radio-inline">
                       <input type="radio" name="batting" value="Bowling">Bowling
                    </label>
                    </div>
                  </div>
                  <!--end bating/bowling radio-->
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                  <div class="row">
                    <div class="col-md-3 control-label ">
                      <label  class="card-text">Opponent</label>
                    </div>
                    <div class="col-md-6">
                      <select class="form-control teamAjax2" name="team_drop_op">
                        <option value="">Select Team</option>
                        @foreach($teamDetails as $row)
                        <option value="{{$row['id']}}">{{$row['teamName']}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <!--select batting/ bowling radio-->
                  <div class="row mt-3">
                    <div class="col-md-4">
                       <label  class="" >Bating/Bowling</label>
                    </div>
                    <div class="col-md-6 ">
                       <label class="radio-inline pr-3">
                         <input type="radio" name="batting1"  value="Batting" id="OpponentRadioBatting" >Batting
                       </label>
                      <label class="radio-inline">
                       <input type="radio" name="batting1" value="Bowling" id="OpponentRadioBowling" >Bowling
                    </label>
                    </div>
                  </div>
                  <!--end bating/bowling radio-->
                </div>
              </div>
              <hr>
              <h5 class="pb-4">Ground Information</h5>
              <div class="row mb-4 ">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-4 control-label">
                      <label for="gender1" class="card-text" >Location</label>
                    </div>
                    <div class="col-md-6">
                      <select class="form-control " name="location_drop" >
                        <option value="">Select Location</option>
                        @foreach($tournamentsDetails as $row)
                        <option>{{$row['Location']}}</option>
                        @endforeach

                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 ">
                  <div class="row">
                    <div class="col-md-3 control-label ">
                      <label  class="card-text">HomeSide</label>
                    </div>
                    <div class="col-md-6">
                      <input class="form-control" type="text" placeholder="neutral" name="homeside" required="true">

                    </div>
                  </div>
                </div>
              </div>

              <center>
                <a role="button" href="{{route('allData')}}" class="btn btn-light btn-sm custom-btn bottom-div"  value="Next" id="cancel" > Cancel </a>
                <input type="button" class="btn btn-light btn-sm custom-btn bottom-div"  value=" Next " id="matchNextBtn" >
              </center>

            </div>
          </div>
          <!--First Section-->



<!-- ===================================================================================================== -->
          <!--second Section Start-->
          <div id="teamDiv" style="display: none;">

            <div class="container">
                <div>
                  <h6 class="card-title">Select Playing XI</h6>
                  <div class="row py-4">
                    <!--left section-->
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12 border-right" >
                      <div class="row mb-2">
                        <div class="col-md-4 control-label">
                          <label for="gender1" >Team</label>
                        </div>
                        <div class="col-md-8">
                          <!--
                          <select class="form-control teamAjax" id="gender1" >
                            <option value="">Select Team</option>
                            @foreach($teamDetails as $row)
                            <option value="{{$row['id']}}">{{$row['teamName']}}</option>
                            @endforeach
                          </select>
                          -->
                          <input type="text" placeholder="No team selected" id="teamNameLeftTxt" readonly>
                        </div>
                      </div>


                      <div class="row mb-4">
                        <div class="col-md-12 ">
                          <p>All players</p>
                          <div class="card " >

                            <div class="card-body p-1 ">

                              <div class="form-group ">
                                <ul class="list-group test" >

                                </ul>

                              </div>

                            </div>
                          </div>
                        </div>
                        <div class="col-md-1 nopadding align-self-center " style="display:none;">
                          <center><button class="btn btn-light " > <i class="fas fa-angle-double-right"></i> </button></center>
                          <center><button class="btn btn-light " > <i class="fas fa-angle-double-left"></i> </button></center>
                        </div>
                        <div class="col-md-5 px-0 " style="display:none;">
                          <p>Selected players</p>
                          <div class="card" >
                            <div class="card-body pt-0" style="height: 385px;" id="divselectedPlayers">
                              <ul >

                              </ul>


                            </div>
                          </div>
                        </div>
                      </div>
                      <!--bottom Button-->
                      <div class="row mb-2">
                        <div class="col-md-4 control-label">
                          <label >Captain</label>
                        </div>
                        <div class="col-md-6" >
                          <select class="form-control" id="captain" name="teamCaptain">
                            <option>No Team Selected</option>
                          </select>
                          <!--
                          <select class="form-control" >
                            <option>Tamim</option>
                            <option>Masrafi</option>
                            <option>musfiqur</option>
                            <option>Mahmud Ullah</option>
                          </select>
                          -->
                        </div>
                      </div>
                      <div class="row mb-4">
                        <div class="col-md-4 control-label">
                          <label  >W.keeper</label>
                        </div>
                        <div class="col-md-6">
                          <select class="form-control" id="wKeeper" name="teamKeeper">
                            <option>No Team Selected</option>
                          </select>
                        </div>
                      </div>
                      <!-- End bottom Button-->
                    </div>
                    <!--End left section-->

                    <!--Right section-->
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                      <div class="row mb-2">
                        <div class="col-md-4 control-label">
                          <label for="gender1" >Team</label>
                        </div>
                        <div class="col-md-8">
                          <input type="text" placeholder="No team selected" id="teamNameRightTxt" readonly>
                          <!--
                          <select class="form-control teamAjax2" id="gender1">
                            @foreach($teamDetails as $row)
                            <option value="{{$row['id']}}">{{$row['teamName']}}</option>
                            @endforeach
                          </select>
                          -->
                        </div>
                      </div>

                      <div class="row mb-4">
                        <div class="col-md-12 ">
                          <p>All players</p>
                          <div class="card" >

                            <div class="card-body p-1">

                              <div class="form-group ">
                                <ul class="list-group test2">

                                </ul>

                              </div>

                            </div>
                          </div>
                        </div>
                        <div class="col-md-1 nopadding align-self-center " style="display:none;">
                          <center><button class="btn btn-light " > <i class="fas fa-angle-double-right"></i> </button></center>
                          <center><button class="btn btn-light " > <i class="fas fa-angle-double-left"></i> </button></center>
                        </div>
                        <div class="col-md-5 px-0" style="display:none;">
                          <p>Selected players</p>
                          <div class="card" style="height: 385px;">

                            <div class="card-body pt-0" style="height: 300px;" id="divselectedPlayersOp">
                              <ul class="showSelectedPlayer">

                              </ul>


                            </div>
                          </div>
                        </div>
                      </div>

                      <!--bottom Button-->
                      <div class="row mb-2">
                        <div class="col-md-4 control-label">
                          <label for="gender1">Captain</label>
                        </div>
                        <div class="col-md-6">
                          <select class="form-control" id="captain2" name="opCaptain">
                            <option>No Team Selected</option>
                          </select>
                        </div>
                      </div>
                      <div class="row mb-4">
                        <div class="col-md-4 control-label">
                          <label >W.keeper</label>
                        </div>
                        <div class="col-md-6">
                          <select class="form-control" id="wKeeper2" name="opKeeper">
                            <option>No Team Selected</option>
                          </select>
                        </div>
                      </div>
                      <!-- End bottom Button-->
                    </div>
                    <!--End right section-->
                  </div>
                  <center>
                    <input type="button" value="Back" id="matchBackBtn" class="btn btn-light btn-sm custom-btn bottom-div">
                    <input type="submit" value="Next" id="matchBackBtn" class="btn btn-light btn-sm custom-btn bottom-div">
                  </center>


                  <!-- <a href="{{ route('matchDetails') }}" class="btn btn-light btn-sm custom-btn bottom-div" > Next </a> -->
                </div>
            </div>
          </div>
          <!--second Section End-->
          <!--  <button type="submit">submit</button>-->

        </form>


        </div>
      </div>
    </div>
    </div>

    <!-- js links-->
    @include('partials.js')


    <script type="text/javascript">
    $(document).ready(function(){
    //start first drop down
    $(document).on('change','.teamAjax',function(){


    // console.log("Hi it is working");
    var team=$(this).val();
    //showing data in level as a team name
    var selectedTeam = $(this).children("option:selected").text();

    $("#teamNameLeftTxt").val(selectedTeam);


    //////////
    //console.log(team);
    //cleanning previous data

    $(".test").empty();
    $("#captain").empty();
    $("#wKeeper").empty();

    $.ajax({
    type:'GET',
    url:'{!!URL::to('findPlayers')!!}',
    data:{'id':team},
    success:function(data){
    // console.log("success");
    //console.log(data);
    $.each(data, function(key, value) {
    $(".test").append('<li class=" d-flex justify-content-between align-items-center">'+'<label class="form-check-label" '+'for="'+value.id+'">' +value.name+"</label>"+'<input class="custom-control-check-input " type="checkbox" name="selectedPlayers[]" value="'+value.id+'" '+'id="'+value.id+'">'+"</li>");

    });

    //captain dropdown
    $("#captain").append("<option >Select Captain</option>");
    for (var i = 0; i < data.length; i++) {
    $("#captain").append("<option value='"+data[i].name+"'>"+data[i].name+"</option>");
    }
    $("#wKeeper").append("<option >Select W.keeper</option>");
    for (var i = 0; i < data.length; i++) {
    $("#wKeeper").append("<option value='"+data[i].name+"'>"+data[i].name+"</option>");
    }
    },
    error:function(){
    }
    });

    });
    //end first drop down
    //Start second drop down

    $(document).on('change','.teamAjax2',function(){



    var team=$(this).val();
    var selectedTeam = $(this).children("option:selected").text();


    $("#teamNameRightTxt").val(selectedTeam);




    //console.log(team);
    $(".test2").empty();
    $("#captain2").empty();
   $("#wKeeper2").empty();

    $.ajax({
    type:'GET',
    url:'{!!URL::to('findPlayers')!!}',
    data:{'id':team},
    success:function(data){
    // console.log("success");


  $.each(data, function(key, value) {
    // console.log(value);
    $(".test2").append('<li class=" d-flex justify-content-between align-items-center">'+'<label class="form-check-label" '+'for="'+value.id+'">' +value.name+"</label>"+'<input class="custom-control-check-input" name="selectedPlayersOp[]" value="'+value.id+'"  type="checkbox" '+'id="'+value.id+'">'+"</li>");
    });

    $("#captain2").append("<option >Select Captain</option>");
    for (var i = 0; i < data.length; i++) {
    $("#captain2").append("<option value='"+data[i].name+"'>"+data[i].name+"</option>");
    }
    $("#wKeeper2").append("<option >Select Captain</option>");
    for (var i = 0; i < data.length; i++) {
    $("#wKeeper2").append("<option value='"+data[i].name+"'>"+data[i].name+"</option>");
    }
    },
    error:function(){
    }
    });

    });

    });

    </script>
    <script type="text/javascript">
    document.getElementById("matchNextBtn").addEventListener("click",function(){
    var box = document.getElementById("matchDiv");
    var box2 = document.getElementById("teamDiv");
    var text = document.getElementById("headTxt");
    if (box.style.display=="block") {

    box.style.display="none";
    box2.style.display="block";
    text.textContent="Team selection";
    }
    });
    document.getElementById("matchBackBtn").addEventListener("click",function(){
    var box = document.getElementById("matchDiv");
    var box2 = document.getElementById("teamDiv");
    var text = document.getElementById("headTxt");
    if (box2.style.display=="block") {
    box2.style.display="none";
    box.style.display="block";
    text.textContent="Match Information";
    }
    });
    </script>

  <script type="text/javascript">
    $(document).ready(function(){
    $('ul.test').on('click','li',function(){
    getSelectedCheckBoxes('selectedPlayers[]');
    });
    });
    var getSelectedCheckBoxes = function (groupName) {
    var result = $('input[name="' + groupName + '"]:checked');
    if (result.length > 0) {
    var resultString = "";
    result.each(function () {
    resultString += $(this).val() + "<br/>";
    });
    $('#divselectedPlayers').html(resultString);
    }
    else {
    $('#divselectedPlayers').html("No Player Selected");
    }
    };

    $(document).ready(function(){
    $('ul.test2').on('click','li',function(){
    getSelectedCheckBoxesOp('selectedPlayersOp[]');
    });
    });
    var getSelectedCheckBoxesOp = function (groupName) {
    var resultOp = $('input[name="' + groupName + '"]:checked');
    if (resultOp.length > 0) {
    var resultStringOp = "";
    resultOp.each(function () {
    resultStringOp += $(this).val() + "<br/>";
    });
    $('#divselectedPlayersOp').html(resultStringOp);
    }
    else {
    $('#divselectedPlayersOp').html("No Player Selected");
    }
    };

</script>

 <script type="text/javascript">
     $(document).ready(function(){
        $("input[type='radio']").click(function(){
            var radioValue = $("input[name='batting']:checked").val();

            if(radioValue.localeCompare("Bowling")){
             $("#OpponentRadioBowling").prop("checked", true);
            }
            if(radioValue.localeCompare("Batting")){
              $("#OpponentRadioBatting").prop("checked", true);
            }
        });

    });
    </script>

    @include('admin.partials.footer')
  </body>
</html>
