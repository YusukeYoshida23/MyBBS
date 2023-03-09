<?php

// echo time() . PHP_EOL;

// echo date('Y-m-d l', time()) . PHP_EOL;
// echo date('Y-m-d l') . PHP_EOL;

// echo date('Y-m-d l', mktime(0, 0, 0, 5, 1, 2020)) . PHP_EOL;

echo date('Y-m-d l', strtotime('2020-05-07')) . PHP_EOL;
echo date('Y-m-d l', strtotime('2020-05-07 +1 day')) . PHP_EOL;

// DateTime
