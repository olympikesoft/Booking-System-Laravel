<?php
namespace App;
use Eloquent; // ******** This Line *********
use DB;       // ******** This Line *********
class Components extends Eloquent
{

  protected $table = 'components';
  protected $fillable = array('id, name, House_id');
  public $timestamps = false;

  public function components() {
      return $this->belongsTo('App\House', 'House_id' );
  }



}
