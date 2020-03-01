<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tournaments_players_performance extends Model
{
  protected $table = "tournaments_players_performance";
     // protected $table = 'banner';
    //protected $primaryKey = 'id_banner';
    protected $primaryKey = 'id';
    public $timestamps = false;
    
    public function currentTime(){
        return date('Y-m-d H:i:s');
    }
}
