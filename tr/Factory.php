<?php

class Factory
{
    static function createTransport($key): ?Transport
    {
        if ($key == 0) return new Airplane();
        elseif ($key == 1 ) return new TruckTrailer();
        elseif ($key == 2) return new Truck();
        elseif ($key == 3) return new SeaContainer();
        else return null;
    }
}