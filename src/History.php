<?php

namespace Cottonfarmer420\Weather2;
use function MongoDB\BSON\toRelaxedExtendedJSON;

require 'vendor/autoload.php';

class History
{

    private array $list = [];

    public function addDay(Day $day): void
    {
        $this->list[] = $day;
    }

    public function getTage()
    {
        return $this->list;
    }

    public function getDescriptionByDate($date)
    {
        foreach ($this->list as $day) {
            if ($day->getDate() === $date) {
                return $day->getDesc();
            }

        }


    }
}