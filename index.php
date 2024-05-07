<?php
namespace Cottonfarmer420\Weather2;
require 'vendor/autoload.php';


$day1 = new Day("2024-05-03","Ein sonniger Tag");
$day2 = new Day("2024-05-04","Ein regnerischer Tag");

$history = new History();

$history->addDay($day1);
$history->addDay($day2);

echo $history->getDescriptionByDate('2024-05-03');
echo $history->getDescriptionByDate('2024-05-04');
