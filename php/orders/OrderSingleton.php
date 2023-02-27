<?php

require_once 'Order.php';

class OrderSingleton
{
  private static $instance;
  private $orders;

  private function __construct()
  {
    $this->orders = array();
  }

  public static function getInstance()
  {
    if (!self::$instance) {
      self::$instance = new OrderSingleton();
    }
    return self::$instance;
  }

  public function addOrder(Order $order)
  {
    array_push($this->orders, $order);
  }

  public function getOrders()
  {
    return $this->orders;
  }

  public function saveOrdersToDatabase()
  {
    // Code to save orders to database as JSON
  }
}
