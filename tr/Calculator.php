<?php
class Calculator implements Calc
{
    protected array $priceArray = [];

    /**
     * Вывод цены в порядке возрастания
     * @return array
     */
    public function getPriceFormula(): array
    {
        $priceArray = $this->priceArray;
        for ($i=0; $i<4; $i++)
        {
            $transport = Factory::createTransport($i);
            $transport->setWD(2000, 500);
            $priceArray[$i] = $transport->calculatePrice(); // расчитываем цену

        }
        return $priceArray;
    }
    public function sort(): array
    {
        $priceArray = $this->getPriceFormula();
        sort($priceArray);
        print "Цены в порядке возразстания: " . PHP_EOL;
        foreach ($priceArray as $price)
        {
            print $price . PHP_EOL;
        }
        return $priceArray;
    }
    public function cheapestOption() {
        $prices = $this->getPriceFormula();
        $min= $prices[0]; //Сравниваем элемент, ищем минимальное значение, если меньше присваевается меньшее
        $name = "";
        for ($i=0; $i<4; $i++){
            if ($prices[$i] < $min){
                $min = $prices[$i];
                $transport = Factory::createTransport($i);
                $name = $transport->getName();
            }
        }
        print "\nCheapest transport: " . $name . " - " . $min . "\n\n";
        return $min;
    }


    public function getFormula ()
    {
        for ($i = 0; $i < 4; $i++) {
            $transport = Factory::createTransport($i);
            $transport->setWD(1000, 400);
            $priceArray[$i] = $transport->calculatePrice(); // расчитываем цену
            if ($priceArray[$i] != "Doesn't match") {
                if ($transport->getName() != "Sea container") {

                    print "Стоимость доставки " . $transport->getName() . ": " . $transport->getWeight() . " * " . $transport->a . " + " . $transport->getDistance() . " * " . $transport->b . " = " . $priceArray[$i] . PHP_EOL;

                } else print $transport->getName() . " - " . $priceArray[$i] . PHP_EOL;
            }
            else print $transport->getName() . ": Doesnt match" . PHP_EOL;
        }
    }

}

