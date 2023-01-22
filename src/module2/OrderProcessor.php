<?php

namespace Oopexam\module2;


class OrderProcessor 
{
    public array $items;
    public TotalCalculatorInterface $calculator;

    public function __construct(TotalCalculatorInterface $calculator) 
    {
        $this->calculator = $calculator;
    }

    
    public function addItem(CinemaTicket $ticket): void 
    {
        $this->items[] = $ticket;
    }

    public function getList(): array 
    {
        return $this->items;
    }

    public function calculatePrice(): float 
    {
        return $this->calculator->calculatePrice($this->items);
    }
}