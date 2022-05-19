<?php

class SeaContainer extends Transport
{
    public ?int $a = null; //Значение для веса (a руб на кг в зависимости от условия)
    public ?int $b = null;
    public function __construct(){
        parent::__construct(21000, "No restrictions", "Sea container");
    }
    public function calculatePrice()
    {
        $weight = $this->weight;
        $distance = $this->distance;
        if ($weight > $this->maxWeight) return "Doesn't match";
        return 80000 . "руб. ";
    }
}