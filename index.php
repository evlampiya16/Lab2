<?php

//Task 1

$very_bad_unclear_name="15 chicken wings";

$order = &$very_bad_unclear_name;
$order .= "Hello World!";

echo "\nYour order is:$very_bad_unclear_name.";
