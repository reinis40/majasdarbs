<?php
# Exercise #1

function fifteen($int1, $int2)
{
    if ($int1 === 15 || $int2 === 15)
    {
        return true;
    }
    if ($int1 + $int2 === 15 || $int1 - $int2 === 15)
    {
        return true;
    }
    return false;
}

//# Exercise #2
echo "\n";

function CheckOddEven($int1)
{
    if ($int1%2 === 0)
    {
        echo "even number \n";
    }
    else
    {
        echo "odd number \n";
    }
    echo "bye!\n";
}

# Exercise #3
echo "\n";
$from = 1;
$to = 100;
$sum = 0;
for ($i = $from; $i <= $to; $i++)
{
    $sum += $i;
}
$counter = $to - $from + 1;
$avg = $sum/$counter;
echo "The sum of $from  to $to  is $sum \n";
echo "The average is $avg \n";
# Exercise #4
echo "\n";
$first = 1;
$last = 10;
$sum1 = 1;
for ($i = $first; $i <= $last; $i++)
{
    $sum1 *= $i;
}
echo "result: $sum1 \n ";
# Exercise #5
echo "\n";
$randomnumber = rand(1,100);
$guess = readline("I'm thinking of a number between 1-100.  Try to guess it.");
if ($guess === $randomnumber)
{
echo"You guessed it!  What are the odds?!?";
}
if ($guess < $randomnumber)
{
    echo"Sorry, you are too low.  I was thinking of $randomnumber.";
}
if ($guess > $randomnumber)
{
    echo"Sorry, you are too high.  I was thinking of $randomnumber.";
}
//exercise 6
echo "\n";
function coza_loza_woza() {
    $count = 1;
    $max_count = 110;
    $numbers_per_line = 11;

    while ($count <= $max_count) {
        $output = "";

        for ($i = 0; $i < $numbers_per_line && $count <= $max_count; $i++, $count++) {
            if ($count % 3 == 0 && $count % 5 == 0 && $count % 7 == 0) {
                $output .= "CozaLozaWoza ";
            } elseif ($count % 3 == 0 && $count % 5 == 0) {
                $output .= "CozaLoza ";
            } elseif ($count % 3 == 0 && $count % 7 == 0) {
                $output .= "CozaWoza ";
            } elseif ($count % 5 == 0 && $count % 7 == 0) {
                $output .= "LozaWoza ";
            } elseif ($count % 3 == 0) {
                $output .= "Coza ";
            } elseif ($count % 5 == 0) {
                $output .= "Loza ";
            } elseif ($count % 7 == 0) {
                $output .= "Woza ";
            } else {
                $output .= $count . " ";
            }
        }

        echo trim($output) . "\n";
    }
}

coza_loza_woza();
//exercise 7
echo "\n";
function calculate_position($Acceleration, $InitialVelocity, $InitialPosition, $Time) {
    $position = 0.5 * $Acceleration * pow($Time, 2) + $InitialVelocity * $Time + $InitialPosition;
    return $position;
}
$Acceleration = -9.81;
$InitialVelocity = 0;
$InitialPosition = 0;
$Time = 10;
$position = calculate_position($Acceleration, $InitialVelocity, $InitialPosition, $Time);
echo "The position of the object after $Time seconds is: $position meters.";
//exercise 8
echo "\n";
function calculatePay($basePay, $hoursWorked) {
    $minWage = 8.00;
    $maxHours = 60;
    if ($basePay < $minWage) {
        echo "Error: Base pay cannot be less than the minimum wage of $minWage an hour.\n";
        return;
    }
    if ($hoursWorked > $maxHours) {
        echo "Error: Hours worked cannot exceed $maxHours hours.\n";
        return;
    }
    $totalPay = 0;
    if ($hoursWorked <= 40) {
        $totalPay = $hoursWorked * $basePay;
    } else {
        $regularHours = 40;
        $overtimeHours = $hoursWorked - $regularHours;
        $totalPay = $regularHours * $basePay;
        $overtimePay = $overtimeHours * ($basePay * 1.5);
        $totalPay += $overtimePay;
    }
    echo "Total pay: $totalPay\n";
}
$employees = array(
      array("Employee 1", 7.50, 35),
      array("Employee 2", 8.20, 47),
      array("Employee 3", 9.00, 61)
);
foreach ($employees as $employee) {
    $name = $employee[0];
    $basePay = $employee[1];
    $hoursWorked = $employee[2];
    echo "Employee: $name\n";
    calculatePay($basePay, $hoursWorked);
    echo "\n";
}
//exercise 9
function calculateBMI($weight, $height)
{
    $height = $height * 39.3700787;
    $weight = $weight * 2.20462262;
    return $weight * 703 / ($height *$height);
}
function CheckBMI($bmi) {
    if ($bmi < 18.5) {
        return "underweight";
    } elseif ($bmi >= 18.5 && $bmi <= 25) {
        return "optimal weight";
    } else {
        return "overweight";
    }
}
$weight = 60; // in kilograms
$height = 1.76; // in meters
echo CheckBMI(calculateBMI($weight, $height));
//execise 10
class Geometry {
    public static function circleArea($radius) {
        if ($radius < 0) {
            echo "Error: Negative value entered for circle's radius.\n";
            return;
        }
        return 3.14 * $radius * $radius;
    }

    public static function rectangleArea($length, $width) {
        if ($length < 0 || $width < 0) {
            echo "Error: Negative value entered for rectangle's length or width.\n";
            return;
        }
        return $length * $width;
    }

    public static function triangleArea($base, $height) {
        if ($base < 0 || $height < 0) {
            echo "Error: Negative value entered for triangle's base or height.\n";
            return;
        }
        return 0.5 * $base * $height;
    }
}
//exrercise 10
echo "\n";
echo "Geometry Calculator\n";
echo "1. Calculate the Area of a Circle\n";
echo "2. Calculate the Area of a Rectangle\n";
echo "3. Calculate the Area of a Triangle\n";
echo "4. Quit\n";
$choice = readline("Enter your choice (1-4) : ");
switch ($choice) {
    case 1:
        $radius = floatval(readline("enter circles radius: "));
        echo "area of the circle is: " . Geometry::circleArea($radius) . "\n";
        break;
    case 2:
        $length = floatval(readline("enter rectangles length: "));
        $width = floatval(readline("enter rectangles width: "));
        echo "area of the rectangle is: " . Geometry::rectangleArea($length, $width) . "\n";
        break;
    case 3:
        $base = floatval(readline("enter triangle base: "));
        $height = floatval(readline("enter triangle's height: "));
        echo "area of the triangle is: " . Geometry::triangleArea($base, $height) . "\n";
        break;
    case 4:
        echo "quitting.\n";
        break;
    default:
        echo "Invalid choice.\n";
}