<?php

namespace App;
use \Carbon\Carbon;


class PriceCalculator
{
    /*protected $accommodation;

    public function __construct(Payment $accommodation)
    {
        $this->accommodation = $accommodation;
    }*/

    public function calculateTotal($dateinitial, $datefinal, $price)
    {
          $length = $this->calculateDays($datefinal, $dateinitial);
          $totalprice = $length * $price;

        return $totalprice;
    }
    public function calculateDays($datefinal, $dateinitial){
      $end = Carbon::parse($dateinitial);
      $initial = Carbon::parse($datefinal);
      $length = $end->diffInDays($initial);
      return $length;
    }
}
