<?php
$number1 = readline("Input the 1st number: ");
$number2 = readline("Input the 2nd number: ");
$number3 = readline("Input the 3rd number: ");
$largest = max($number1, $number2, $number3);
echo "The largest number is: $largest\n";
//exercise2
echo "Enter the number: ";
$number = readline();
if ($number > 0) {
    echo "The number is positive.\n";
} elseif ($number < 0) {
    echo "The number is negative.\n";
}
//exercise3
$number = intval(readline("Enter a positive integer: "));
if ($number <= 0) {
    echo "invalid.\n";
} else {
    $numDigits = strlen((string)$number);
    echo "The number of digits in $number is: $numDigits\n";
}
//exercise4
$dayNumber = intval(readline("Enter the day number (0-6): "));
if ($dayNumber >= 0 && $dayNumber <= 6) {
    if ($dayNumber == 0) {
        echo "Sunday\n";
    } elseif ($dayNumber == 1) {
        echo "Monday\n";
    } elseif ($dayNumber == 2) {
        echo "Tuesday\n";
    } elseif ($dayNumber == 3) {
        echo "Wednesday\n";
    } elseif ($dayNumber == 4) {
        echo "Thursday\n";
    } elseif ($dayNumber == 5) {
        echo "Friday\n";
    } elseif ($dayNumber == 6) {
        echo "Saturday\n";
    }
} else {
    echo "Not a valid day\n";
}
//exercise 5
function convertToDigits($char)
{
    $char = strtoupper($char);
    if ($char == 'A' || $char == 'B' || $char == 'C') {
        return 2;
    } elseif ($char == 'D' || $char == 'E' || $char == 'F') {
        return 3;
    } elseif ($char == 'G' || $char == 'H' || $char == 'I') {
        return 4;
    } elseif ($char == 'J' || $char == 'K' || $char == 'L') {
        return 5;
    } elseif ($char == 'M' || $char == 'N' || $char == 'O') {
        return 6;
    } elseif ($char == 'P' || $char == 'Q' || $char == 'R' || $char == 'S') {
        return 7;
    } elseif ($char == 'T' || $char == 'U' || $char == 'V') {
        return 8;
    } elseif ($char == 'W' || $char == 'X' || $char == 'Y' || $char == 'Z') {
        return 9;
    } else {
        return -1;
    }
}
$input = readline("Enter a string: ");
$digits = "";
for ($i = 0; $i < strlen($input); $i++) {
    $charDigit = convertToDigits($input[$i]);
    if ($charDigit != -1) {
        $digits .= $charDigit;
    }
}
echo "Digits sequence: $digits\n";