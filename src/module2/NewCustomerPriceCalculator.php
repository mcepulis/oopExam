<?php

namespace Oopexam\module2;


class NewCustomerPriceCalculator implements TotalCalculatorInterface 
{
    public function calculatePrice(array $tickets): float 
    {
        $total = 0;
        foreach ($tickets as $ticket) {
            if($ticket === $tickets[0]) {
                $total += $ticket->price * 0.8;
            } else {
                $total += $ticket->price;
            }
        }
        return $total;
    }
}