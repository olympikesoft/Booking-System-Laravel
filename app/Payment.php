<?php
namespace App;
use Eloquent; // ******** This Line *********
use DB;       // ******** This Line *********
class Payment extends Eloquent
{

  protected $table = 'payment';
  protected $fillable = array('id, date, state, payment_type_id');
  public $timestamps = false;

  public function Payment_type() {
      return $this->belongsTo('App\Payment_type', 'payment_type_id');
  }



}
