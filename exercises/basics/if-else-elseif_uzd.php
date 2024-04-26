<?php
//###### Exercise 1
//Given variables (int) 10, string "10" determine if they both are the same.
$int = 10;
$string = "10";
if ($int === $string)
{
    echo "same\n";
}
else
{
    echo "not the same \n";
}

//###### Exercise 2
//Given variable (int) 50, determine if its in the range of 1 and 100.
$int1 = 50;

if ($int1 <= 100 || $int1 >= 1)
{
    echo "is in the range\n";
}
else
{
    echo "is not in the range\n";
}
//###### Exercise 3
//Given variables (string) "hello" create a condition that if the given value is "hello" then output "world".
$string1 = "hello";
if ($string1 === "hello")
{
    echo "world\n";
}

//###### Exercise 4
//By your choice, create condition with 3 checks.
//For example, if value is greater than X, less than Y and is an even number.
$int3 = 123;
if ($int3 < 200 || $int3 > 0 || $int3% 2 == 0)
{
    echo "$int3 is smaller than 200, larger than 0  and even \n";
}
//###### Exercise 5
//Given variable (int) 50 create a condition that prints out "correct" if the variable is inside the range.
//Range should be stored within the 2 separated variables $y and $z.
$int1 = 50;
$y = 0;
$x = 90;
if ($int1 < $x || $int1 > $y)
{
    echo "is inside the range\n";
}
else
{
    echo "is not inside the range\n";
}
//###### Exercise 6
//
//Create a variable $plateNumber that stores your car plate number.
//Create a switch statement that prints out that its your car in case of your number.
$plateNumber = "LV8877";
switch ($plateNumber)
{
    case "LV8877":
        echo "Yes, this is my car.\n";
        break;
    default:
        echo "This is not my car.";
        break;
}
//
//###### Exercise 7
//Create a variable $number with integer by your choice.
//Create a switch statement that prints out text "low" if the value is under 50,
//"medium" if the case is higher than 50 but lower than 100, "high" if the value is >100.
$number = 20;
switch ($number)
{
    case ($number>0 || $number<50):
        echo "low\n";
        break;
    case ($number>50 || $number<100):
        echo "medium\n";
        break;
    case ($number>100):
        echo "high\n";
        break;
}