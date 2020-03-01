<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\teams;
use App\players;
use App\tournaments;
use App\tournaments_players;
use App\tournaments_players_performance;
use App\tournaments_details;
use App\batperformance;
use App\bowlingperformance;
use App\results;
use App\fixtures;
use App\game_managers;
class teamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function allData(){

         $fixturesData = fixtures::all()->toArray();
       $teams=[];
       $i=0;
        foreach ($fixturesData as $fixture ) {
         $team1Data = teams::find($fixture['team1Id'])->toArray();
         $team2Data = teams::find($fixture['team2Id'])->toArray();
         //print_r($fixture['date']);
         $teams[$i]=[$team1Data['teamName'],$team2Data['teamName']];

         $i++;

        }
         return view('allData',compact('fixturesData','teams'));
     }


    public function startMatch(){
        $teamDetails = teams::all()->toArray();
        $tournamentsDetails = tournaments::all()->toArray();
        return view('matchInformation',compact('teamDetails','tournamentsDetails'));
    }

     public function teamSelection(){
        $teamDetails = teams::all()->toArray();
        return view('teamSection',compact('teamDetails'));
    }


    public function findPlayers(Request $request){
        $data=players::select('name','id')->where('teamId',$request->id)->take(100)->get();
           return response()->json($data);
    }



    public function store(Request $request)
    {
        $name=$request->teamName;
        return redirect()->route('teamSelection')->with('teamName',$name);
    }


    public function storeMatchDetails(Request $request)
    {
      $tournaments_details = new tournaments_details();

      $tournaments_details->tournament_id = $request->input('match_type_drop');
      $tournaments_details->team_id = $request->input('team_drop');
      $tournaments_details->op_team_id = $request->input('team_drop_op');
      $tournaments_details->team_status = $request->batting;
      $tournaments_details->oponent_status = $request->batting1;
      $tournaments_details->location = $request->location_drop;
      $tournaments_details->home_side = $request->homeside;
      $tournaments_details->save();

      $tournaments_players = new tournaments_players();
      $tournaments_players->tournament_id = $request->input('match_type_drop');
      $tournaments_players->team_id   = $request->input('team_drop');
      $sendTeamId=$request->input('team_drop');
      $tournaments_players->team_id_op   = $request->input('team_drop_op');

      //print_r($data);die;
      $tournaments_players->player_squad_list = 'N/A';
      $data_op = $data = $request->input('selectedPlayersOp');
      $tournaments_players->player_squard_list_op= 'N/A';
      $tournaments_players->player_squad_captain = $request->teamCaptain;
      $tournaments_players->player_squad_keeper = $request->teamKeeper;
      $tournaments_players->player_squad_captain_op = $request->opCaptain;
      $tournaments_players->player_squad_keeper_op= $request->opKeeper;
      $tournaments_players->save();


// result table========================
      $rsltId = rand();

      $results = new results();
      $results->resultid = $rsltId;
      $results->fixtureid = $request->input('match_type_drop');
      $results->team1score = 0;
      $results->team2score = 0;
      $results->tossid = 0;
      $results->comment = "null";
      $results->save();


// player performance table========================================================================
      $data = $request->Input('selectedPlayers');
      $data_op = $request->Input('selectedPlayersOp');

      $batId = "";
      $bowlId = "";

      $toss = $request->batting;
      // print_r($toss);
      // die();

      // player performance table
      if ($toss == "Batting") {
        foreach ($data as $row) {
          $batId = $request->input('team_drop');

          $batsmans = new batperformance();
          $batsmans->resultid = $rsltId;
          $batsmans->teamid = $batId;
          $batsmans->playerid = $row;
          $batsmans->catchid = -1;
          $batsmans->bowledid = -1;
          $batsmans->dismisstype = 'Not out';
          $batsmans->runs = 0;
          $batsmans->balls = 0;
          $batsmans->fours = 0;
          $batsmans->sixes = 0;
          $batsmans->dismissovers = 0;
          $batsmans->fow = 0;
          $batsmans->save();
        }

        foreach ($data_op as $row) {
        $bowlId = $request->input('team_drop_op');

          $bowlers = new bowlingperformance();
          $bowlers->resultid = $rsltId;
          $bowlers->teamid = $bowlId;
          $bowlers->playerid = $row;
          $bowlers->overs = 0;
          $bowlers->maidens = 0;
          $bowlers->runs = 0;
          $bowlers->wickets = 0;
          $bowlers->save();
        }

      }else {
        foreach ($data as $row) {
          $bowlId = $request->input('team_drop');

          $bowlers = new bowlingperformance();
          $bowlers->resultid = $rsltId;
          $bowlers->teamid = $batId;
          $bowlers->playerid = $row;
          $bowlers->overs = 0;
          $bowlers->maidens = 0;
          $bowlers->runs = 0;
          $bowlers->wickets = 0;
          $bowlers->save();
        }

        foreach ($data_op as $row) {
          $bowlId = $request->input('team_drop_op');

          $batsmans = new batperformance();
          $batsmans->resultid = $rsltId;
          $batsmans->teamid = $bowlId;
          $batsmans->playerid = $row;
          $batsmans->catchid = -1;
          $batsmans->bowledid = -1;
          $batsmans->dismisstype = 'Not out';
          $batsmans->runs = 0;
          $batsmans->balls = 0;
          $batsmans->fours = 0;
          $batsmans->sixes = 0;
          $batsmans->dismissovers = 0;
          $batsmans->fow = 0;
          $batsmans->save();
        }
      }

      //$this->matchDetails($batId,$bowlId);
      $battingPlayers = players::select('id','name')->where('teamId',$batId)->get()->toArray();
      $bowlingPlayers = players::select('id','name')->where('teamId',$bowlId)->get()->toArray();

      $tournamentTeamDetails = tournaments_players::all()->toArray();

      $jonData= tournaments_players::select('player_squad_list')->where('id',10)->first();
      $rowData = json_decode($jonData->player_squad_list,true);

      //print_r($battingPlayers);
      // print_r($batId);
      // print_r($bowlId);
       //die();

      return view('matchDetails',compact('rowData','batId','bowlId','battingPlayers','bowlingPlayers'))->with('success', 'Match informaiton stored successfully!');
      // return redirect()->route('matchDetails',compact('batId','bowlId','battingPlayers','bowlingPlayers'))->with('success', 'Match informaiton stored successfully!');
// send id
    }

    public function matchDetails(){
        $tournamentTeamDetails = tournaments_players::all()->toArray();

        $jonData= tournaments_players::select('player_squad_list')->where('id',10)->first();
        $rowData = json_decode($jonData->player_squad_list,true);


        $battingPlayers = players::select('id','name')->where('teamId',32)->get()->toArray();
        $bowlingPlayers = players::select('id','name')->where('teamId',32)->get()->toArray();
        // $battingPlayers = players::select('id','name')->where('teamId',$batId)->get()->toArray();
        // $bowlingPlayers = players::select('id','name')->where('teamId',$bowlId)->get()->toArray();

        // print_r($battingPlayers);
        // print_r($batId);
        // print_r($bowlId);
         //die();

        return view('matchDetails',compact('rowData', 'battingPlayers', 'bowlingPlayers'));
    }



    public function scoreUpdate(Request $request){
        $batsmanId = $request->input('batsman');
        $date = date('Y-m-d H:i:s');
        $performance = batperformance::all()->where('playerid',69)->toArray();
        //print_r($performance);
        $fours = 0;
        $sixes = 0;
        foreach ($performance as $row) {
          if ($request->input('runs')==4) {
            $runs = 4+ $row['runs'];
            $fours= 1+ $row['fours'];
            $sixes= $sixes+ $row['sixes'];
            $balls=1+ $row['balls'];
          }else if ($request->input('runs')==6) {
            $runs = 6+ $row['runs'];
            $sixes=1+ $row['sixes'];
            $fours= $fours+ $row['fours'];
            $balls=1+ $row['balls'];
          }else {
            $runs = $request->input('runs')+ $row['runs'];
            $balls=1+ $row['balls'];
            $fours= $fours+ $row['fours'];
            $sixes= $sixes+ $row['sixes'];
          }

          $dismissovers=1+ $row['dismissovers'];
          $fow=1+ $row['fow'];
        }


        $batperformanceUp = batperformance::where('playerid',$batsmanId)->update(['dismisstype' => $request->input('outType'),
                                                                          'runs' => $runs,
                                                                          'balls' => $balls,
                                                                        'fours' => $fours,
                                                                      'sixes' => $sixes,
                                                                    'dismissovers' => $dismissovers,
                                                                  'fow' => $fow]);

        // print_r($batperformanceUp);
        // die();

        // $batperformanceUp->catchid = $request->input('input_g_name');
        // $batperformanceUp->bowledid = $request->input('input_g_email');
        // $batperformanceUp->resultid = 979312766;
        // $batperformanceUp->teamid = 32;
        // $batperformanceUp->playerid = 69;
        // $batperformanceUp->catchid = 1;
        // $batperformanceUp->bowledid = 1;
        //
        // $batperformanceUp->dismisstype = $request->input('outType');
        // $batperformanceUp->runs = $request->input('runs');
        // $batperformanceUp->balls = 1;
        // $batperformanceUp->fours = 1;
        // $batperformanceUp->sixes = 1;
        // $batperformanceUp->dismissovers = 1;
        // $batperformanceUp->fow = 12;
        // $batperformanceUp->save();

        return redirect()->route('matchDetails');

      }


      public function loginUser(Request $request){
        $admins = game_managers::all()->toArray();
        $email = $request->input('email');
        $password = $request->input('password');
        foreach ($admins as $row) {

          if ($email == $row['email'] && $password == $row['password']) {
            $fixturesData = fixtures::all()->toArray();
          $teams=[];
          $i=0;
           foreach ($fixturesData as $fixture ) {
            $team1Data = teams::find($fixture['team1Id'])->toArray();
            $team2Data = teams::find($fixture['team2Id'])->toArray();
            //print_r($fixture['date']);
            $teams[$i]=[$team1Data['teamName'],$team2Data['teamName']];

            $i++;

           }
            return view('allData',compact('fixturesData','teams'));

          }else {

            return redirect()->route('home')->with('warning', 'Wrong Password please try again!');
          }

        }

      }

}
