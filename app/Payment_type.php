<?php
namespace App;
use Eloquent; // ******** This Line *********
use DB;       // ******** This Line *********
class Payment_type extends Eloquent
{

  protected $table = 'payment';
  protected $fillable = array('id, name');
  public $timestamps = false;

  public function Payment_type() {
      return $this->hasMany('App\Payment');
  }



}
