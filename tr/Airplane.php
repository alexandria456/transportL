<?php

class Airplane extends Transport
{
    public ?int $a; //Значение для веса (a руб на кг в зависимости от условия)
    public ?int $b;
    public function __construct()
    {
        parent::__construct(3000, 5000, "Airplane");
        $this->secondWeight = 50000;
    }

    public function getSecondPartWeight(): int
    {
        return $this->secondWeight;
    }
    public function calculatePrice(): float|int|string
    {
        $weight = $this->weight;
        $distance = $this->distance;

        if ($weight > ($this->getSecondPartWeight() + $this->maxWeight) || $distance > $this->maxDistance) return "Doesn't match"; //Складываем два отсека и сравниваем

        $this->a = 5;
        $this->b = 50;
        if ($weight >= 1000) {
            $this->a = 3;
        }
        $s_weight = $weight * $this->a;
        if ($distance >= 2000){
            $this->b = 10;
        }
        $s_distance = $distance * $this->b;

        return $s_weight + $s_distance . "руб. ";
    }
}