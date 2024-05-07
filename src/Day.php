<?php

namespace Cottonfarmer420\Weather2;
require 'vendor/autoload.php';

class Day
{
    private string $date = '';

    public function getDate(): string
    {
        return $this->date;
    }

    private function setDate(string $date): void
    {
        $this->date = $date;
    }

    function __construct($date, $description)
    {

        $this->setDate($date);
        $this->setDesc($description);
    }

    private string $description = '';


    public function getDesc(): string
    {
        return $this->description;
    }


    public function setDesc(string $description): void
    {
        $this->description = $description;
    }
}
