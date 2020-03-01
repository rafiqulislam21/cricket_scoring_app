<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tournaments_details extends Model
{
protected $table = "tournaments_details";
     // protected $table = 'banner';
    //protected $primaryKey = 'id_banner';
    protected $primaryKey = 'id';
    public $timestamps = false;
    
    public function currentTime(){
        return date('Y-m-d H:i:s');
    }
}
