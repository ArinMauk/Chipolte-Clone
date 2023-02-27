<?php

require_once(__DIR__ . '/../Order.php');
require_once(__DIR__ . '/../OrderOptions.php');

abstract class OrderType
{
  protected $name;
  protected $description;
  protected $options;
  protected $userOrder;
  protected $price;
  protected $calories;

  public function __construct()
  {
    $this->userOrder = new Order();
  }

  public function getName()
  {
    return $this->name;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function getPrice()
  {
    return $this->price;
  }

  public function getCalories()
  {
    return $this->calories;
  }

  public function getOptions()
  {
    return $this->options;
  }

  public function getUserOrder()
  {
    return $this->userOrder;
  }

  public function calculatePrice()
  {
    $this->price = 0; // if for w/e reason someone calls this method twice, we're not adding the values more than once.
    foreach ($this->userOrder->getOrder() as $selection) {
      $this->price += OrderOptions::$$selection['price'];
    }
  }

  public function calculateCalories()
  {
    $this->calories = 0; // same reason for price.
    foreach ($this->userOrder->getOrder() as $selection) {
      $this->calories += OrderOptions::$$selection['calories'];
    }
  }
}
