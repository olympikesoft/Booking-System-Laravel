<?php
namespace App;
use Eloquent; // ******** This Line *********
use DB;       // ******** This Line *********
class Images extends Eloquent
{

  protected $table = 'imagens';
  protected $fillable = array('id, name, House_id');
  public $timestamps = false;

  public function house() {
      return $this->belongsTo('App\House','House_id');
  }



}
