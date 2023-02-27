<?php

class Order
{
    private $userOrder;

    public function __construct()
    {
        $this->userOrder = array();
    }

    public function addSelection($selection)
    {
        array_push($this->userOrder, $selection);
    }

    public function removeSelection($selection)
    {
        $index = array_search($selection, $this->userOrder);
        if ($index !== false) {
            unset($this->userOrder[$index]);
        }
    }

    public function getOrder()
    {
        return $this->userOrder;
    }
}
