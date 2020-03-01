<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class game_managers extends Model
{
    protected $table = "game_manager";
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function currentTime(){
        return date('Y-m-d H:i:s');
    }
}
