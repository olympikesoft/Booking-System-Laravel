<?php
namespace App;
use Eloquent; // ******** This Line *********
use DB;       // ******** This Line *********
class Reserva extends Eloquent
{

  protected $table = 'Reserva';
  protected $fillable = array('id, House_id, users_id , n_persons, state,  date_final, date_initial');
  public $timestamps = false;

  /*public function users() {
      return $this->belongsTo('App\users', name_of_column_in_users_table, name_of_column_in_post_table);
  }*/

  public function users(){
         return $this->belongsTo('App\users','users_id');
     }

  public function house(){
     return $this->belongsTo('App\House', 'house_id');
  }

  public function payment(){
    return $this->hasMany('App\Payment');
  }

}
