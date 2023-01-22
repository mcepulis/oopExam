<?php

require_once "vendor/autoload.php";

use Oopexam\module2\CinemaTicket;
use Oopexam\module2\NewCustomerPriceCalculator;
use Oopexam\module2\OrderProcessor;
use Oopexam\module2\StandardPriceCalculator;
use Oopexam\module2\SubscriberPriceCalculator;
use Oopexam\module2\TotalCalculatorInterface;



$ticket1 = new CinemaTicket("Terminator", "London", new DateTime, 10);
$ticket2 = new CinemaTicket("Terminator", "Vashington", new DateTime, 14);
$ticket3 = new CinemaTicket("Terminator", "Vilnius", new DateTime, 8);

$standardPriceCalculator = new StandardPriceCalculator();
$subscriberPriceCalculator = new SubscriberPriceCalculator();
$newCustomerPriceCalculator = new NewCustomerPriceCalculator();
$standardOrderProcessor = new OrderProcessor($standardPriceCalculator);
$subscriberOrderProcessor = new OrderProcessor($subscriberPriceCalculator);
$newCustomerOrderProcessor = new OrderProcessor($newCustomerPriceCalculator);

$standardOrderProcessor->addItem($ticket1);
$standardOrderProcessor->addItem($ticket2);
$standardOrderProcessor->addItem($ticket3);
$subscriberOrderProcessor->addItem($ticket1);
$subscriberOrderProcessor->addItem($ticket2);
$subscriberOrderProcessor->addItem($ticket3);
$newCustomerOrderProcessor->addItem($ticket1);
$newCustomerOrderProcessor->addItem($ticket2);
$newCustomerOrderProcessor->addItem($ticket3);

echo $standardOrderProcessor->calculatePrice() . "eu - standardOrder" . PHP_EOL;
echo $subscriberOrderProcessor->calculatePrice() . "eu - subscriberOrder" . PHP_EOL;
echo $newCustomerOrderProcessor->calculatePrice() . "eu - newCustomerOrder". PHP_EOL;