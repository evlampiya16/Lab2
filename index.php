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


//Task 13
$my_num = 16;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo $answer;

//Task 14

$a = 10;
$b = 3;
echo "<\n>" . ($a%$b);
/////////////////////////////////////////////////////////////
if ($a%$b==0)
    echo "<\n>Делится! Результат: <\n>" . ($a/$b);
else echo "<\n>Делится с остатком. Остаток: <\n>" . ($a%$b);
/////////////////////////////////////////////////////////////
echo $st = pow(2,10) . "<\n>";
echo sqrt(245) . "<\n>";
$arr = array(4,2,5,19,13,0,10);
$sum = 0;
foreach($arr as $i)
    $sum += $i**2;
echo sqrt($sum) . "<\n>";
/////////////////////////////////////////////////////////////
echo round(sqrt(379),0) . " ";
echo round(sqrt(379),1) . " ";
echo round(sqrt(379),2) . "<\n>";
$arr2 = array(
    "floor" => floor(sqrt(587)),
    "ceil" => ceil(sqrt(587)));
/////////////////////////////////////////////////////////////
$arr3=array(
    4,-2,5,10,-130,0,10);
$minN=$arr3[0];
$maxN=$arr3[0];
foreach($arr3 as $n)
    echo"$num ";
if ($minN > $n)
    $minN = $n;
if ($maxN < $n)
    $maxN = $n;
echo "<\n>maximum - $maxN , minimum - $minN";
/////////////////////////////////////////////////////////////
echo "<\n>" . rand(1,100) . "<\n>";
$arr4 = array();
for($i = 0; $i<10; $i++) 
{
    array_push($arr4, rand(1, 100));
}
for($i = 0; $i<10; $i++) {
    echo "$arr4[$i] ";
}
/////////////////////////////////////////////////////////////
for($i = 0; $i < 10;$i++)
{
    $a=rand(-5,5);
    $b=rand(-5,5);
    echo "<\n>a-b=$a-$b=|" . ($a-$b) . "|=" . abs($a-$b);
}

$arr5 = array();
for($i = 0; $i<10; $i++) 
{
    array_push($arr5, rand(-10, 10));
}
foreach ($arr5 as &$item) 
{
    echo $item . " ";
    if($item < 0)
        $item = abs($item);
}
////////////////////////////////////////////////////////////
$randomN = rand(1,100);
echo "<\n>Число: $randomN<\n>";
$div = array();
for($i = 1;$i <= $randomN;$i++)
{
    if($randomN % $i == 0)
    {
        array_push($div, $i);
        echo $i . " ";
    }
}
$OneToTen = array(1,2,3,4,5,6,7,8,9,10);
$counter = 0;
$sum = 0;
while ($sum < 10){
    $sum += $OneToTen[$counter];
    $counter ++;
}


//Task 15
function printStringReturnNumber()
{
    echo "<\n>Я люблю WEB!<\n>";
    return 101;
}
$my_num = printStringReturnNumber();
echo "<\n>" . $my_num;


//Task 16
function increaseEnthusiasm($s = "null")
{
    return $s . "!";
}
echo "<\n>" . increaseEnthusiasm("The session is coming soon...");

function repeatThreeTimes($s = "null")
{
    return $s . $s . $s;
}

echo "<\n>" . repeatThreeTimes("The session is coming soon...");

echo "<\n>" . increaseEnthusiasm(repeatThreeTimes("Help me"));

function cut($s = "null", $charsStart = 10)
{
    return substr($s, 0, $charsStart);
}
echo "<\n>" . cut(increaseEnthusiasm(repeatThreeTimes("Help me")), 5);

function Array16($arr, $end, $now = 0)
{
    echo $arr[$now] . " ";
    if ($now < $end) 
        {Array16($arr, $end, ++$now);}
    else
        return;
}

function NumSum($num, $sum=0)
{
    while ($num > 0)
    {
        $sum+=$num%10;
        $num/=10;
    }
    echo "$sum ";
    if ($sum>9)
        NumSum($sum);
    else return;
}


// Task 17
$XxX = "";
$arrXxX = array();
for($i=1;$i<5;$i++)
{
    $XxX = $XxX . "x";
    array_push($arrXxX,$XxX);
    echo $arr[$i] . "<br>";
}

function arrayFill($Symbol,$var)
{
    $temp = array();
    for ($i = 0;$i < $var; $i++)
    {
        array_push($retArr,$Symbol);
    }
    return $temp;
}

$doubleArray = array(
    array(1,2,3),
    array(4,5),
    array(6)
);

function SumCounter(array $array){
    $Sum = array_sum($array);
    foreach($array as $child) {
        if (is_array($child))
            $Sum += SumCounter($child);
    }
    return $Sum;
}

$Array3X3 = array();
for($i = 0; $i < 3; $i++){
    for($j = 0; $j < 3; $j++){
        $Array3X3[$i][$j] = $i +3*$j +1;
    }
}


$array2539 = array (2, 5, 3, 9);
$result = $array2539[0]*$array2539[1]+$array2539[2]*$array2539[3];
echo "<\n>" . $result . "<\n>";


$user = array(
    "surname" => "Shamgunova ",
    "name" => "Eva ",
    "patronymic" => "Maksimovna "
);
foreach ($user as $str)
    echo $str . " ";

$date = array(
    "day" => 14,
    "month" => 5,
    "year" => 2022
);
echo $date["'year'"] . ":";
echo $date["'month'"] . ":";
echo $date["'day'"] . ":";

$TaskArray = array('a','b','c','d','e');
echo"<\n>" . count($TaskArray);
echo"<\n>" . $TaskArray[count($TaskArray)-1] . " " . $TaskArray[count($TaskArray)-2];
