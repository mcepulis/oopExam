<?php

namespace Oopexam\module2;


class StandardPriceCalculator implements TotalCalculatorInterface 
{
    public function calculatePrice(array $tickets) 
    {
        $Prices = array_map(function ($ticket) {return $ticket->price;}, $tickets);
        
        return array_sum($Prices);
    }
}