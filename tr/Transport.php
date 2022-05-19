<?php
abstract class Transport
{
    protected string $name;
    protected int $maxWeight;
    protected $maxDistance;
    protected int $secondWeight;
    protected int $weight;
    protected int|string $distance;
    public ?int $a = null; //Значение для веса (a рублей на кг в зависимости от условия)
    public ?int $b = null;

    public function __construct($maxWeight, $maxDistance, $name){
        $this->maxWeight = $maxWeight;
        $this->maxDistance = $maxDistance;
        $this->name = $name;

    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getMaxWeight(): int
    {
        return $this->maxWeight;
    }

    public function getMaxDistance(){
        return $this->maxDistance;
    }

    public function setWD($weight, $distance): void{
        $this->weight = $weight;
        $this->distance = $distance;
    }
    public function getWeight(): int
    {
        return $this->weight;
    }
    public function getDistance(): int|string
    {
        return $this->distance;
    }
    abstract function calculatePrice();
}