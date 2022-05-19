<?php

class TruckTrailer extends Transport
{
    public ?int $a; //Значение для веса (a руб на кг в зависимости от условия)
    public ?int $b;
    public function __construct(){
        parent::__construct(20000, 3000, "Truck with trailer");
    }
    public function calculatePrice(): string
    {
        $weight = $this->weight;
        $distance = $this->distance;

        if ($weight > $this->maxWeight || $distance > $this->maxDistance) return "Doesn't match";
        $this->a = 5;
        $this->b = 50;
        if ($weight >= 500) {
            $this->a = 3;
        }
        $s_weight = $weight * $this->a;
        if ($distance >= 500){
            $this->b = 15;
        }
        $s_distance = $distance * $this->b;

        return $s_weight + $s_distance . "руб. ";
    }
}