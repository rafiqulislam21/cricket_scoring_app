<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\fixtures;
use App\teams;
use App\tournaments;
use App\players;
use App\feedback;
use App\contactUs;


class UserController extends Controller
{
  function home(){
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
    return view('user.home',compact('fixturesData','teams'));
  }
   function matches(){
   // 	$fixturesData = fixtures::all()->toArray();
   // 	$matches=[];
   // 	$i=0;
   //   foreach ($fixturesData as $fixture ) {
   //   	$team1Data = teams::find($fixture['team1Id'])->toArray();
   //   	$team2Data = teams::find($fixture['team2Id'])->toArray();
   //   	$matches[$i]=[$team1Data['teamName'],$team2Data['teamName'],$fixture['date'],$fixture['time'],$fixture['tournament_id']];

   //   	$i++;

   //   }

   // return view('user.matches',compact('matches'));
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
   	return view('user.matches',compact('fixturesData','teams'));
   }


   function fixtures(){
   	$fixturesData = fixtures::all()->toArray();
   	$teams=[];
   	$tournaments=[];
   	$i=0;
     foreach ($fixturesData as $fixture ) {
     	$team1Data = teams::find($fixture['team1Id'])->toArray();
     	$team2Data = teams::find($fixture['team2Id'])->toArray();
     	$teams[$i]=[$team1Data['teamName'],$team2Data['teamName']];

     	$tournamentRow= tournaments::find($fixture['tournament_id'])->toArray();
     	 $tournaments[$i]=[$tournamentRow['match_type']];

     	$i++;

     }
    // print_r( $tournaments['0']);die;
   	return view('user.fixtures',compact('fixturesData','teams','tournaments'));
   }

   function tournament(){
   	$tournamentData = tournaments::all()->toArray();
   	return view('user.tournament',compact('tournamentData'));
   }

   function player(){
   	$players = players::all()->toArray();
    $teamNames =[];
    $i=0;
   	foreach ($players as $player) {
   		//print_r($player['teamId']);die;
   		$teamRow=teams::find($player['teamId']);
   		$teamNames[$i]=[$teamRow['teamName']];
      $i++;
   	}

   	//print_r($teamNames);die;
   	return view('user.players',compact('players','teamNames'));
   }

   function team(){
    $teams = teams::all()->toArray();
    return view('user.teams',compact('teams'));
   }

   function feedback(){

 return view('user.feedback');
   }
   function sendFeedback(Request $request){
      $date = date('Y-m-d H:i:s');
      $feedback = new feedback();
      $feedback->name=$request->input('feedback_user_name');
      $feedback->email=$request->input('feedback_user_email');
      $feedback->message=$request->input('feedback_user_message');
      $feedback->date=$date;
      $feedback->save();

       return redirect()->route('feedback')->with('success', ' feedback send successfully!');
   }

   function sendContact(Request $request){
      $date = date('Y-m-d H:i:s');
      $feedback = new contactUs();
      $feedback->name=$request->input('feedback_user_name');
      $feedback->email=$request->input('feedback_user_email');
      $feedback->message=$request->input('feedback_user_message');
      $feedback->save();

       return redirect()->route('contactus')->with('success', ' Message send successfully!');
   }

   function contactus(){
    return view('user.contact-us');
   }

   function livescore(){
    return view('user.live-match');
   }
}
