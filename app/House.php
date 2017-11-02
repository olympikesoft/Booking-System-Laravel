<?php
namespace App;
use Eloquent; // ******** This Line *********
use DB;       // ******** This Line *********
class House extends Eloquent
{

  protected $table = 'house';
  protected $fillable = array('id, name, price, state, localization');
  public $timestamps = false;

  public function Images() {
      return $this->hasMany('App\Images');
  }

 public function Components(){
         return $this->hasMany('App\Components');
     }

  public function Neighborhood(){
     return $this->hasMany('App\Neighborhood');
  }

}
