<?php

require_once(__DIR__ . '/order_types/Burrito.php');

class OrderFactory
{
  private static $orderTypes = array(
    'Burrito',
    'BurritoBowl',
    'LifeStyleBowl',
    'Quesadilla',
    'Salad',
    'Tacos',
    'KidsMeal',
    'SidesAndDrinks'
  );

  public static function createOrder($orderType)
  {
    if (!in_array($orderType, self::$orderTypes)) {
      throw new Exception('Invalid order type');
    }

    $className = $orderType;
    $order = new $className();

    return $order;
  }
}
