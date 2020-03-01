<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use DateTime;
use App\fixtures;
use App\players;
use App\teams;
use App\tournaments;
use App\tournaments_details;
use App\tournaments_player_performance;
use App\tournaments_players;
use App\game_managers;
use App\feedback;
use App\admins;

class adminController extends Controller
{


    public function adminDashboard(){
      $totalFixtures = fixtures::count();
      $totalTournaments = tournaments::count();
      $totalTeams = teams::count();
      $totalPlayers = players::count();
      $totalMatches = fixtures::count();
      $totalGame_managers = game_managers::count();
        return view('admin.index',compact('totalFixtures','totalTournaments','totalTeams','totalPlayers','totalMatches','totalGame_managers'));

      }


// fixtures add, edit, delete=================================
    public function fixtures(){
        $fixturesData = fixtures::all()->toArray();
        $fixturesTournamentsData = tournaments::all()->toArray();
        $fixturesTeamsData = teams::all()->toArray();
        // $fixturesDataNames= fixtures::join('tournaments','tournaments.id','tournaments.tournament_id');
        // $fixturesDataNames= fixtures::join('','','')->select('')->where('id',10)->first();
        //echo $fixturesData;
        //die();
        return view('admin.pages.forms.add_fixtures',compact('fixturesData','fixturesTournamentsData','fixturesTeamsData'));
          // return view('admin.pages.forms.add_fixtures');
      }

    public function fixturesEdit($id){
        $fixturesEdit = fixtures::find($id);
        $fixturesTournaments = tournaments::find($fixturesEdit['tournament_id']);
        $fixturesTeam1 = teams::find($fixturesEdit['team1Id']);
        $fixturesTeam2 = teams::find($fixturesEdit['team2Id']);
        // $fixturesEdit = DB::table('fixture')->where('id',$id);
        // echo $fixturesEdit;
        // die();
        return view('admin.pages.forms.edit_fixtures',compact('fixturesEdit','fixturesTournaments','fixturesTeam1','fixturesTeam2','id'));
        // return view('admin.pages.forms.edit_fixtures');
      }

    public function fixturesDelete($id){
        DB::table('fixture')->where('id',$id)->delete();
        return redirect()->route('fixtures')->with('warning', 'Fixtures deleted successfully!');
      }
// fixtures add, edit, delete=================================
// fixture insert and update=======================================
     public function fixturesStore(Request $request){
         $fixtures = new fixtures();

         $fixtures->tournament_id = $request->input('input_tournament_name');
         $fixtures->team1Id = $request->input('input_team');
         $fixtures->team2Id = $request->input('input_team_op');
         $fixtures->venue = $request->input('input_venue');
         $fixtures->date = $request->input('input_date');
         $fixtures->time = $request->input('input_time');
         $fixtures->matchType = $request->input('radio_day_night');
         $fixtures->save();

         return redirect()->route('fixtures')->with('success', 'Fixtures added successfully!');
       }

       public function fixturesUpdate(Request $request, $id){
           // echo $id;
           // die();
           $fixturesUp = fixtures::find($id);

           $fixturesUp->tournament_id = $request->input('input_tournament_name');
           $fixturesUp->team1Id = $request->input('input_team');
           $fixturesUp->team2Id = $request->input('input_team_op');
           $fixturesUp->venue = $request->input('input_venue');
           $fixturesUp->date = $request->input('input_date');
           $fixturesUp->time = $request->input('input_time');
           $fixturesUp->matchType = $request->input('radio_day_night');
           $fixturesUp->save();

           return redirect()->route('fixtures')->with('success', 'Fixtures Updated successfully!');
         }

// fixture insert and update=======================================


// gamemanagers add, edit, delete=================================
    public function gamemanagers(){
        $gamemanagersData = game_managers::all()->toArray();

        return view('admin.pages.forms.add_gameManager',compact('gamemanagersData'));
      }

      public function gamemanagersEdit($id){
          $game_managersEdit = game_managers::find($id);
          return view('admin.pages.forms.edit_gameManager',compact('game_managersEdit','id'));
        }

      public function gamemanagersDelete($id){
          // DB::table('fixture')->where('id',$id)->delete();
          $game_managersDelete = game_managers::find($id);
          $game_managersDelete->delete();
          return redirect()->route('gamemanagers')->with('warning', 'Game Manager deleted successfully!');
        }
// gamemanagers add, edit, delete=================================
// gamemanagers insert and update=======================================
     public function gamemanagersStore(Request $request){
           $date = date('Y-m-d H:i:s');
           $gamemanagers = new game_managers();

           $gamemanagers->name = $request->input('input_g_name');
           $gamemanagers->email = $request->input('input_g_email');
           $gamemanagers->password = $request->input('input_g_password');
           $gamemanagers->phone = $request->input('input_g_phone');
           $gamemanagers->address = $request->input('input_g_address');
           $gamemanagers->created_time = $date;
           $gamemanagers->save();

           return redirect()->route('gamemanagers')->with('success', 'Gamemanager added successfully!');
         }

       public function gamemanagersUpdate(Request $request, $id){
           $date = date('Y-m-d H:i:s');
           $gamemanagersUp = game_managers::find($id);

           $gamemanagersUp->name = $request->input('input_g_name');
           $gamemanagersUp->email = $request->input('input_g_email');
           $gamemanagersUp->password = $request->input('input_g_password');
           $gamemanagersUp->phone = $request->input('input_g_phone');
           $gamemanagersUp->address = $request->input('input_g_address');
           $gamemanagersUp->created_time = $date;
           $gamemanagersUp->save();

           return redirect()->route('gamemanagers')->with('success', 'Game Manager Info updated successfully!');
         }

// gamemanagers insert and update=======================================



      // teams add, edit, delete=================================
            public function players(){
              $playersData = players::all()->toArray();
              $teamsData = teams::all()->toArray();

              return view('admin.pages.forms.add_player',compact('playersData', 'teamsData'));
            }

            public function playersEdit($id){
              $playersEdit = players::find($id);
              $playersEditTeam = teams::find($playersEdit['teamId']);
              $teamsData = teams::all()->toArray();
              return view('admin.pages.forms.edit_player',compact('playersEdit','teamsData', 'playersEditTeam', 'id'));
            }

            public function playersDelete($id){
              $playersDelete = players::find($id);
              $playersDelete->delete();
              return redirect()->route('players')->with('warning', 'Team deleted successfully!');
            }
      // teams add, edit, delete=================================
      // teams insert and update=======================================
            public function playersStore(Request $request){
              $date = date('Y-m-d H:i:s');
              $players = new players();

              if ($request->hasFile('input_p_photo')) {
                $file = $request->file('input_p_photo');


                $fileExt = $file->getClientOriginalExtension();
                $fileSize = $file->getClientSize();

                if ($fileExt == 'jpeg' || $fileExt == 'png' || $fileExt == 'jpg' || $fileExt == 'gif' || $fileExt == 'bmp' || $fileExt == 'svg') {

                  $name = time().'.'.$file->getClientOriginalExtension();
                  $path = public_path().'/admin/images/players/';
                  $file->move($path, $name);
                  $logo = $name;
                }else {
                  echo "Selected file is not a Image. Please select an Image.";
                  die();
                }

              }else {
                $logo='playersprofile.png';
              }

              $players->teamId = $request->input('input_p_team_name');
              $players->profilePic =$logo;
              $players->name = $request->input('input_p_name');
              $players->playerRole =$request->input('input_p_role');
              $players->status =$request->input('input_p_status');
              $players->created_time = $date;

              $players->save();

              return redirect()->route('players')->with('success', 'Player added successfully!');
            }


            public function playersUpdate(Request $request, $id){
              $date = date('Y-m-d H:i:s');
              $playersUp = players::find($id);


              // if ($request->hasFile('input_p_photo')) {

                // $file = $request->file('input_p_photo_edit');
                // // echo $file;
                // // die();
                // $fileExt = $file->getClientOriginalExtension();
                // $fileSize = $file->getClientSize();
                //
                // if ($fileExt == 'jpeg' || $fileExt == 'png' || $fileExt == 'jpg' || $fileExt == 'gif' || $fileExt == 'bmp' || $fileExt == 'svg') {
                //
                //   $name = time().'.'.$file->getClientOriginalExtension();
                //   $path = public_path().'/admin/images/players/';
                //   $file->move($path, $name);
                //   $logo = $name;
                // }else {
                //   echo "Selected file is not a Image. Please select an Image.";
                //   die();
                // }

              // }else {
              //   $logo='playersprofile.png';
              // }


              $logo='playersprofile.png';

              $playersUp->teamId = $request->input('input_p_team_name');
              $playersUp->profilePic =$logo;
              $playersUp->name = $request->input('input_p_name');
              $playersUp->playerRole =$request->input('input_p_role');
              $playersUp->status =$request->input('input_p_status');
              $playersUp->created_time = $date;

              $playersUp->save();

              return redirect()->route('players')->with('success', 'Player informations updated successfully!');
            }

      // teams insert and update=======================================


// teams add, edit, delete=================================
      public function teams(){
        $teamsData = teams::all()->toArray();

        return view('admin.pages.forms.add_team',compact('teamsData'));
      }

      public function teamsEdit($id){
        $teamsEdit = teams::find($id);
        return view('admin.pages.forms.edit_team',compact('teamsEdit','id'));
      }

      public function teamsDelete($id){
        // DB::table('fixture')->where('id',$id)->delete();
        $teamsDelete = teams::find($id);
        $teamsDelete->delete();
        return redirect()->route('teams')->with('warning', 'Team deleted successfully!');
      }
// teams add, edit, delete=================================
// teams insert and update=======================================
      public function teamsStore(Request $request){
        $date = date('Y-m-d H:i:s');
        $teams = new teams();

        // $this->validate($request, ['file' => 'required|image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',]);
        // if ($request->hasFile('file')) {
        // $image = $request->file('input_team_logo');
        // $name = time().'.'.$image->getClientOriginalExtension();
        // $destinationPath = public_path('admin\images\\');
        // $image->move($destinationPath, $name);

        // $image = $request->file('input_team_logo');

        if ($request->hasFile('input_team_logo')) {
          $file = $request->file('input_team_logo');

          $fileExt = $file->getClientOriginalExtension();
          $fileSize = $file->getClientSize();


          if ($fileExt == 'jpeg' || $fileExt == 'png' || $fileExt == 'jpg' || $fileExt == 'gif' || $fileExt == 'bmp' || $fileExt == 'svg') {
            // if ($fileSize<2000000) {
            $name = time().'.'.$file->getClientOriginalExtension();
            $path = public_path().'/admin/images/teams/';
            $file->move($path, $name);
            $logo = $name;
            // }else {
            //   echo "file size is too large!";
            //   die();
            // }
          }else {
            echo "Selected file is not a Image. Please select an Image.";
            die();
          }

        }else {
          $logo='teamlogo.jpeg';
        }

        // echo $destinationPath.$name;
        // die();

        // $logo = $request->input('input_team_logo');
        // $logo = $destinationPath.$name;

        $teams->teamName = $request->input('input_team_name');
        $teams->teamShortName = $request->input('input_team_short_name');
        $teams->teamLogo =$logo;
        $teams->status = $request->input('input_team_status');
        $teams->created_time = $date;
        $teams->save();

        return redirect()->route('teams')->with('success', 'Team added successfully!');
      }

      public function teamsUpdate(Request $request, $id){
        $date = date('Y-m-d H:i:s');
        $teamsUp = teams::find($id);

        // if ($request->hasFile('input_team_logo')) {
        //   $file = $request->file('input_team_logo');
        //
        //   $fileExt = $file->getClientOriginalExtension();
        //   $fileSize = $file->getClientSize();
        //
        //   if ($fileExt == 'jpeg' || $fileExt == 'png' || $fileExt == 'jpg' || $fileExt == 'gif' || $fileExt == 'bmp' || $fileExt == 'svg') {
        //         $name = time().'.'.$file->getClientOriginalExtension();
        //         $path = public_path().'/admin/images/teams/';
        //         $file->move($path, $name);
        //         $logo = $name;
        //   }else {
        //     echo "Selected file is not a Image. Please select an Image.";
        //     die();
        //   }
        //
        // }else {
        //   $logo='teamlogo.jpeg';
        // }

        $logo='teamlogo.jpeg';

        $teamsUp->teamName = $request->input('input_team_name');
        $teamsUp->teamShortName = $request->input('input_team_short_name');
        $teamsUp->teamLogo =$logo;
        $teamsUp->status = $request->input('input_team_status');
        $teamsUp->created_time = $date;
        $teamsUp->save();

        return redirect()->route('teams')->with('success', 'Team updated successfully!');
      }

// teams insert and update=======================================


// tournaments add, edit, delete=================================
    public function tournaments(){
        $tournamentsData = tournaments::all()->toArray();

        return view('admin.pages.forms.add_tournaments',compact('tournamentsData'));
      }

    public function tournamentsEdit($id){
        $tournamentsEdit = tournaments::find($id);

        return view('admin.pages.forms.edit_tournaments',compact('tournamentsEdit','id'));
      }

    public function tournamentsDelete($id){
        $tournamentDelete = tournaments::find($id);
        $tournamentDelete->delete();
        return redirect()->route('tournaments')->with('warning', 'Tournament deleted successfully!');
      }
// tournaments add, edit, delete=================================
// torunaments insert and update=======================================
     public function tournamentsStore(Request $request){
           // $time = time();
           // $date = date("Y-m-d",$time);
           $date = date('Y-m-d H:i:s');
           $tournaments = new tournaments();

           $tournaments->match_type = $request->input('input_tournament');
           $tournaments->Location = $request->input('input_tournament_location');
           $tournaments->total_team = $request->input('input_tournament_team');
           $tournaments->created_time = $date;
           $tournaments->save();

           return redirect()->route('tournaments')->with('success', 'Tournament added successfully!');
         }

       public function tournamentsUpdate(Request $request, $id){
           $date = date('Y-m-d H:i:s');
           // $date = new DateTime();
           $tournamentsUp = tournaments::find($id);

           $tournamentsUp->match_type = $request->input('input_tournament');
           $tournamentsUp->Location = $request->input('input_tournament_location');
           $tournamentsUp->total_team = $request->input('input_tournament_team');
           $tournamentsUp->created_time = $date;
           $tournamentsUp->save();

           return redirect()->route('tournaments')->with('success', 'Tournament Updated successfully!');
         }

// fixture insert and update=======================================



    public function charts(){
        return view('admin.pages.charts.chartjs');
      }


    public function lock(){
        return view('admin.pages.samples.lock-screen');
      }


    public function tables(){
      $fixturesData = fixtures::all()->toArray();
      // $fixturesTournamentsData = tournaments::all()->toArray();
      // $fixturesTeamsData = teams::all()->toArray();

      $gamemanagersData = game_managers::all()->toArray();

      $playersData = players::all()->toArray();
      $teamsData = teams::all()->toArray();

      $teamsData = teams::all()->toArray();

      $tournamentsData = tournaments::all()->toArray();

      $feedbackData = feedback::all()->toArray();

        return view('admin.pages.tables.basic-table', compact('fixturesData','gamemanagersData', 'playersData', 'teamsData', 'tournamentsData', 'feedbackData'));
      }

      public function feedbackDelete($id){
        $feedbackDelete = feedback::find($id);
        $feedbackDelete->delete();
        return redirect()->route('tables')->with('warning', 'Feedback deleted successfully!');
      }

    public function documentation(){
        return view('documentation.documentation');
      }


      public function adminLock(){

          return view('admin.pages.samples.lock-screen');
        }

        public function loginAdmin(Request $request){
          $admins = admins::all()->toArray();
          $email = $request->input('email');
          $password = $request->input('password');
          foreach ($admins as $row) {

            if ($email == $row['email'] && $password == $row['password']) {
              $totalFixtures = fixtures::count();
              $totalTournaments = tournaments::count();
              $totalTeams = teams::count();
              $totalPlayers = players::count();
              $totalMatches = fixtures::count();
              $totalGame_managers = game_managers::count();
                return view('admin.index',compact('totalFixtures','totalTournaments','totalTeams','totalPlayers','totalMatches','totalGame_managers'));

            }else {
              return redirect()->route('adminLock')->with('warning', 'Wrong Password please try again!');
            }

          }

        }

}
