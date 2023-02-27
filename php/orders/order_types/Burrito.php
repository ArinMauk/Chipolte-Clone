<?php

require_once 'OrderType.php';
require_once(__DIR__ . '/../Order.php');

class Burrito extends OrderType
{
  public function __construct()
  {
    parent::__construct();
    $this->name = "BURRITO";
    $this->description = "Your choice of freshly grilled meat or sofritas wrapped in a warm flour tortilla with rice, beans, or fajita veggies, and topped with guac, salsa, queso blanco, sour cream or cheese.";
    $this->options = array(
      "PROTEIN OR VEGGIE" => array("CHICKEN", "STEAK", "BARBACOA", "CARNITAS", 'SOFRITAS', 'VEGGIE'),
      "RICE" => array("WHITE RICE", "BROWN RICE"),
      "BEANS" => array("BLACK BEANS", "PINTO BEANS"),
      "TOPPINGS" => array("GUACAMOLE", "FRESH_TOMATO_SALSA", "ROASTED_CHILI-CORN_SALSA", "TOMATILLO-GREEN_CHILI_SALSA", "TOMATILLO-RED_CHILI_SALSA", "SOUR CREAM", "FAJITA VEGGIES", "CHEESE", "ROMAINE LETTUCE", "QUESO BLANCO")
    );
  }

}
