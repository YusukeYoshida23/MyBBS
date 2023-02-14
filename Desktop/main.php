<?php

function getStats(...$numbers) 
{
  $total = 0;
  foreach ($numbers as $number) {
    $total += $number;
  }
  return [
    $total,
    $total / count($numbers)];
}

// print_r(getStats(1, 3, 5));

// list($sum, $average) = getStats(1, 3, 5);
[$sum, $average] = getStats(1, 3, 5);

echo $sum . PHP_EOL;
echo $average . PHP_EOL;
