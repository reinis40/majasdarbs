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
$first = 1;
$last = 10;
$sum1 = 1;
for ($i = $first; $i <= $last; $i++)
{
    $sum1 *= $i;
}
echo "result: $sum1 \n ";
# Exercise #5
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


