<?php

include 'Calculator.php';

$cal = new Calculator();
$cal->subtract(20);
$cal->add(20);

if ($cal->result != 0) {
  $cal->add(42);
}

echo $cal->result;
