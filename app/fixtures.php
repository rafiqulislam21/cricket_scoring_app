<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fixtures extends Model
{
  protected $table = "fixture";
  // protected $table = 'banner';
 //protected $primaryKey = 'id_banner';
 protected $primaryKey = 'id';
 public $timestamps = false;

 public function currentTime(){
     return date('Y-m-d H:i:s');
 }
}
