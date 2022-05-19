<?php

class Truck extends Transport
{
    public function __construct(){
        parent::__construct(3000, 500, "Truck");
    }
    public function calculatePrice(): float|int|string
    {
        $weight = $this->weight;
        $distance = $this->distance;
        $this->a = 5;
        $this->b = 20;
        if ($weight > $this->maxWeight || $distance > $this->maxDistance) return "Doesn't match";
        return $weight*$this->a + $distance * $this->b . "руб. ";
    }
}