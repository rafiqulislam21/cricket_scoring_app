<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class feedback extends Model
{
  protected $table = "feedback";
  // protected $table = 'banner';
 //protected $primaryKey = 'id_banner';
 protected $primaryKey = 'id';
 public $timestamps = false;

 public function currentTime(){
     return date('Y-m-d H:i:s');
 }
}
