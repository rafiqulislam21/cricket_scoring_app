<!DOCTYPE html>
<html>
  <head>
    <title>Match details</title>
    <!-- css links -->
    @include('partials.css')
  </head>
  <body>

    @include('partials.header')
    <div class="match mb-0 "><b id="headTxt">Match1</b></div>
    <div  class="container-fluid px-0">
      @include('admin.partials.alerts')


      <div class="row ">
      <div class="col-md-12 col-12">
        <div>
            <h3 class="text-center">Batting Details</h3>
            <div class="container-fluid bg-light">
            <div class="row">
                <div class="table-responsive overflow-auto" style="height:300px;">
                <table class="table shadow-sm table-striped">
                    <thead class="thead bg-info text-white">
                    <tr>
                    <th>Batsmen</th>
                    <th>Bowler</th>
                    <th>Runs</th>
                    <th>Balls</th>
                    <th>4's</th>
                    <th>6's</th>
                    <th>SR</th>

                    </tr>
                    </thead>
                    <tbody>

                 <tr>
                    <th>Mehedi hasan</th>
                    <th>Not Out</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>

                    </tr>
                    <tr>
                    <th>Ibrahim sarker</th>
                    <th>Not Out</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>

                    </tr>
                    <tr>
                    <th>Arif hossain</th>
                    <th>Not Out</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>

                    </tr>
                    <tr>
                    <th>pappu hasan</th>
                    <th>Not Out</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>

                    </tr>
                    <tr>
                    <th>Hasan</th>
                    <th>Not Out</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>

                    </tr>
                    <tr>
                    <th>Miraz</th>
                    <th>Not Out</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>

                    </tr>
                    <tr>
                    <th>Rubel rana</th>
                    <th>Not Out</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>

                    </tr>
                    <tr>
                    <th>Musfiq</th>
                    <th>Not Out</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>

                    </tr>
                    <tr>
                    <th>Shakib</th>
                    <th>Not Out</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>

                    </tr>
                    <tr>
                    <th>Mamun hasan</th>
                    <th>Not Out</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>
                    <th>0</th>

                    </tr>

                    <tr>
                        <th>Extra</th>
                         <th>(w3)</th>
                         <th>0</th>
                    </tr>

                </tbody>
          </table>
        </div>
            </div>

         </div>

        </div>
        <!-- End batting -->
      </div>
      </div>

      <div class="row  shadow-sm font-weight-bold pl-3 mb-2">
        <div class="col-md-12 text-center"><h1>Tiger 11: 00/0 (0.0 over)</h1>
        <a href="{{route('allData')}}" class="btn btn-outline-danger">End match</a>
        <br><br>

        </div>

      </div>

      <div>
        <h3 class="text-center">Bowling Details</h3>
        <div class="col-md-12 col-12 py-2" align="center">
          <label for="">This over : </label>
          <button type="button" class="btn btn-light btn-circle shadow " data-toggle="modal" data-target=".bd-example-modal-lg"><b>-</b></button>
          <button type="button" class="btn btn-light  btn-circle shadow " data-toggle="modal" data-target=".bd-example-modal-lg"><b>-</b></button>
          <button type="button" class="btn btn-light  btn-circle shadow " data-toggle="modal" data-target=".bd-example-modal-lg"><b>-</b></button>
          <button type="button" class="btn btn-light  btn-circle shadow " data-toggle="modal" data-target=".bd-example-modal-lg"><b>-</b></button>
          <button type="button" class="btn btn-light  btn-circle shadow " data-toggle="modal" data-target=".bd-example-modal-lg"><b>-</b></button>
          <button type="button" class="btn btn-light  btn-circle shadow " data-toggle="modal" data-target=".bd-example-modal-lg"><b>-</b></button>
        </div>
        <div class="container-fluid bg-light">
        <div class="row">
            <div class="table-responsive overflow-auto" style="height:300px;">
            <table class="table shadow-sm table-striped">
                <thead class="thead bg-info text-white">
                <tr>
                <th>Bowler</th>
                <th>Over</th>
                <th>Runs</th>
                <th>Maiden</th>
                <th>Wickets</th>
                <th>Wide</th>
                <th>No Ball</th>
                <th>Dots</th>

                </tr>
                </thead>
                <tbody>

             <tr>
                <th>Bijoy</th>
                <th>0.0</th>
                <th>0</th>
                <th>0</th>
                <th>0</th>
                <th>0</th>
                <th>0</th>
                <th>0</th>
             </tr>
             <tr>
                <th>Sohel rana</th>
                <th>0.0</th>
                <th>0</th>
                <th>0</th>
                <th>0</th>
                <th>0</th>
                <th>0</th>
                <th>0</th>
             </tr>
             <tr>
                <th>Nahin hossain</th>
                <th>0.0</th>
                <th>0</th>
                <th>0</th>
                <th>0</th>
                <th>0</th>
                <th>0</th>
                <th>0</th>
             </tr>
             <tr>
                <th>pappu</th>
                <th>0.0</th>
                <th>0</th>
                <th>0</th>
                <th>0</th>
                <th>0</th>
                <th>0</th>
                <th>0</th>
             </tr>
             <tr>
                <th>Masud rana</th>
                <th>0.0</th>
                <th>0</th>
                <th>0</th>
                <th>0</th>
                <th>0</th>
                <th>0</th>
                <th>0</th>
             </tr>
             <tr>
                <th>Zisan hasan</th>
                <th>0.0</th>
                <th>0</th>
                <th>0</th>
                <th>0</th>
                <th>0</th>
                <th>0</th>
                <th>0</th>
             </tr>
             <tr>
                <th>Rahim</th>
                <th>0.0</th>
                <th>0</th>
                <th>0</th>
                <th>0</th>
                <th>0</th>
                <th>0</th>
                <th>0</th>
             </tr>
             <tr>
                <th>Nafis Adil</th>
                <th>0.0</th>
                <th>0</th>
                <th>0</th>
                <th>0</th>
                <th>0</th>
                <th>0</th>
                <th>0</th>
             </tr>
             <tr>
                <th>Mustasim khandakar</th>
                <th>0.0</th>
                <th>0</th>
                <th>0</th>
                <th>0</th>
                <th>0</th>
                <th>0</th>
                <th>0</th>
             </tr>
             <tr>
                <th>Rakibul islam</th>
                <th>0.0</th>
                <th>0</th>
                <th>0</th>
                <th>0</th>
                <th>0</th>
                <th>0</th>
                <th>0</th>
             </tr>
             <tr>
                <th>Arafat hossain</th>
                <th>0.0</th>
                <th>0</th>
                <th>0</th>
                <th>0</th>
                <th>0</th>
                <th>0</th>
                <th>0</th>
             </tr>

            </tbody>
      </table>
    </div>
        </div>

     </div>

    </div>
    <!-- End bowling -->


    <!-- Large modal -->

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <form action="{{route('scoreUpdate')}}" method="GET">
            {{ csrf_field() }}
            <div class="modal-header text-center ">
              <h4 class="modal-title w-100 font-weight-bold">Enter Details</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="container-fluid py-4 ">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label for="Run" class="col-sm-3 col-form-label">Run</label>
                    <div class="col-sm-9">
                      <!-- <input type="text" class="form-control" id="Run"> -->
                      <div class="border p-2">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="runs" id="inlineRadio0" value="0">
                          <label class="form-check-label" for="inlineRadio0">0</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="runs" id="inlineRadio1" value="1">
                          <label class="form-check-label" for="inlineRadio1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="runs" id="inlineRadio2" value="2">
                          <label class="form-check-label" for="inlineRadio2">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="runs" id="inlineRadio3" value="3">
                          <label class="form-check-label" for="inlineRadio3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="runs" id="inlineRadio4" value="4">
                          <label class="form-check-label" for="inlineRadio4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="runs" id="inlineRadio4b" value="4b">
                          <label class="form-check-label" for="inlineRadio4b">4(boundary)</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="runs" id="inlineRadio5" value="5">
                          <label class="form-check-label" for="inlineRadio5">5</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="runs" id="inlineRadio6" value="6">
                          <label class="form-check-label" for="inlineRadio6">6</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="runs" id="inlineRadio6b" value="6b">
                          <label class="form-check-label" for="inlineRadio6b">6(boundary)</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="runs" id="inlineRadio7" value="7">
                          <label class="form-check-label" for="inlineRadio7">7</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label for="Out" class="col-sm-3 col-form-label">Bats man</label>
                    <div class="col-sm-9">

                      <select class="custom-select" required name="batsman">
                        <option value="">select</option>
                        @foreach($battingPlayers as $row)
                        <option value="{{$row['id']}}">{{$row['name']}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="Out" class="col-sm-3 col-form-label" required>Bowler</label>
                    <div class="col-sm-9">
                      <select class="custom-select" required name="bowler">
                        <option value="">select</option>
                        @foreach($bowlingPlayers as $row)
                        <option value="{{$row['id']}}">{{$row['name']}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label for="Extra" class="col-sm-3 col-form-label">Extra</label>
                    <div class="col-sm-9">
                      <div class="border p-2">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="extratype" id="b" value="b">
                          <label class="form-check-label" for="b">B</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="extratype" id="lb" value="lb">
                          <label class="form-check-label" for="lb">Lb</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="extratype" id="wd" value="wd">
                          <label class="form-check-label" for="wd">Wd</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="extratype" id="nb" value="nb">
                          <label class="form-check-label" for="nb">Nb</label>
                        </div>
                      </div>
                      <div class="border p-2">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="extra" id="extra0" value="0">
                          <label class="form-check-label" for="extra0">0</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="extra" id="extra1" value="1">
                          <label class="form-check-label" for="extra1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="extra" id="extra2" value="2">
                          <label class="form-check-label" for="extra2">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="extra" id="extra3" value="3">
                          <label class="form-check-label" for="extra3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="extra" id="extra4" value="4">
                          <label class="form-check-label" for="extra4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="extra" id="extra5" value="5">
                          <label class="form-check-label" for="extra5">5</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="extra" id="extra6" value="6">
                          <label class="form-check-label" for="extra6">6</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="extra" id="extra7" value="7">
                          <label class="form-check-label" for="extra7">7</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label for="Out" class="col-sm-3 col-form-label">Out type</label>
                    <div class="col-sm-9">
                      <select class="custom-select" name="outType">
                        <option value="Not out" selected>Select</option>
                        <option value="Bowled">Bowled</option>
                        <option value="Caught">Caught</option>
                        <option value="Stumped">Stumped</option>
                        <option value="LBW">LBW</option>
                        <option value="Run-Out">Run-Out</option>
                        <option value="Hit-wicket">Hit-wicket</option>
                        <option value="Obstructing the field">Obstructing the field</option>
                        <option value="Retired out">Retired out</option>
                        <option value="Hit the ball twice">Hit the ball twice</option>
                        <option value="Timed Out">Timed Out</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer d-flex justify-content-end">
              <!-- <button class="btn btn-success btn-inline">submit<i class="fas fa-paper-plane-o ml-1"></i></button> -->
              <input type="submit" value="Submit" class="btn btn-outline-success btn-sm">
            </div>
          </form>
        </div>
      </div>
    </div>
    <br><br><br><br>
      @include('admin.partials.footer')
    <!-- js links-->
    @include('partials.js')
  </body>
</html>
