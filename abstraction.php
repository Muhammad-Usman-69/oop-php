<?php
//data abstraction is used to make compulsary function
abstract class Orders
{
    //abstract class must have a abstract function which is only declared and is further defined by child class
    abstract function setOrderId();
}

//child class inheriting abstract class must define abstruct function
class Order extends Orders
{
    public $orderId;

    //abstract function must be defined before using other functions
    function setOrderId()
    {
        $this->orderId = rand(1, 10);
    }

    function getOrderId()
    {
        echo $this->orderId;
    }
}

$order = new Order;
$order->setOrderId();
$order->getOrderId();