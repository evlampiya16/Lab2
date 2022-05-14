<?php

//Task 1

$very_bad_unclear_name="15 chicken wings";

$order = &$very_bad_unclear_name;
$order .= "Hello World!";

echo "\nYour order is:$very_bad_unclear_name.";


//Task 2

$a = 132;
echo $a . "<\n>";
$b = 100;
echo $b;

$fl = 1.23;
echo $fl . "\n";

echo (8+4) . "<\n>";

$last_month = 1187.23;
$this_month = 1089.98;
echo ($last_month - $this_month);

//Task 11

$num_languages = 4;

$months=11;
$days = $months*16;

$days_per_language=$days/$num_languages;
echo "<\n>" . $days_per_language;


//Task 12

echo 8**2;

