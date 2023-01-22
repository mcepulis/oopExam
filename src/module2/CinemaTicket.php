<?php

namespace Oopexam\module2;

use DateTime;

class CinemaTicket 
{
    public string $movie;
    public string $location;
    public DateTime $date;
    public float $price;

    public function __construct(string $movie, string $location, DateTime $date, float $price)
    {
        $this->movie = $movie;
        $this->location = $location;
        $this->date = $date;
        $this->price = $price;
    }

}