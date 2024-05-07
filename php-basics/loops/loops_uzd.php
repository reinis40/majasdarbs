<?php
//exercise 1
echo "The first 10 natural numbers are:\n";
for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}
//exercise 2
echo "Input number: ";
$times = intval(readline());
$result = 1;
for ($i = 1; $i <= $times; $i++) {
    $result *= $i;
}
echo "result $result\n";
//exerrcise3
$firstWord = readline("first word: ");
$secondWord = readline("second word: ");
$totalLength = 30;
$dots = $totalLength - strlen($firstWord) - strlen($secondWord);
echo $firstWord;
for ($i = 0; $i < $dots; $i++) {
    echo ".";
}
echo $secondWord . "\n";
//exercise4
class FizzBuzz {
    public static function printFizzBuzz($maxValue) {
        for ($i = 1; $i <= $maxValue; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                echo "FizzBuzz ";
            } elseif ($i % 3 == 0) {
                echo "Fizz ";
            } elseif ($i % 5 == 0) {
                echo "Buzz ";
            } else {
                echo $i . " ";
            }
            if ($i % 20 == 0) {
                echo "\n";
            }
        }
    }
}
echo "Max value? ";
$maxValue = intval(readline());
FizzBuzz::printFizzBuzz($maxValue);
//exercise5
class Piglet {
    public static function playGame() {
        echo "Welcome to Piglet!\n";
        $totalScore = 0;
        while (true) {
            $roll = rand(1, 6);
            echo "You rolled a $roll!\n";

            if ($roll == 1) {
                echo "You got 0 points.\n";
                break;
            } else {
                $totalScore += $roll;
                echo "Roll again? ";
                $choice = strtolower(readline());

                if ($choice != 'yes' && $choice != 'y') {
                    echo "You got $totalScore points.\n";
                    break;
                }
            }
        }
    }
}
Piglet::playGame();
//exercise 6
//exercise7
class RollTwoDice {
    public static function rollUntilDesiredSum($desiredSum) {
        echo "Desired sum: $desiredSum\n";
        $random = rand(1, 6);
        while (true) {
            $random2 = rand(1, 6);
            $sum = $random + $random2;
            echo "$random and $random2 = $sum\n";
            if ($sum == $desiredSum) {
                break;
            }
            $random = rand(1, 6);
        }
    }
}
$desiredSum = intval(readline("Desired sum: "));
RollTwoDice::rollUntilDesiredSum($desiredSum);
//exercise 8
class NumberSquare {
    public static function printNumberSquare($min, $max) {
        for ($i = $min; $i <= $max; $i++) {
            for ($j = $i; $j <= $max; $j++) {
                echo $j;
            }
            for ($j = $min; $j < $i; $j++) {
                echo $j;
            }
            echo "\n";
        }
    }
}
$min = intval(readline("Min? "));
$max = intval(readline("Max? "));
NumberSquare::printNumberSquare($min, $max);