<?php
$numbers = [
      1789, 2035, 1899, 1456, 2013,
      1458, 2458, 1254, 1472, 2365,
      1456, 2165, 1457, 2456
];
echo "Original numeric array: \n";
for ($i = 0; $i < count($numbers); $i++)
{
    echo $numbers[$i] . ", ";
}
echo "\n";
sort($numbers);
echo "Sorted numeric array: \n";
for ($i = 0; $i < count($numbers); $i++)
{
    echo $numbers[$i] . ", ";
}
echo "\n";
$words = [
      "Java",
      "Python",
      "PHP",
      "C#",
      "C Programming",
      "C++"
];
echo "Original string array: ";
for ($i = 0; $i < count($words); $i++)
{
    echo $words[$i] . ", ";
}
echo "\n";
sort($words);
echo "Sorted string array: ";
for ($i = 0; $i < count($words); $i++)
{
    echo $words[$i] . ", ";
}
//exercise 2
$numbers1 = [20, 30, 25, 35, -16, 60, -100];
$sum = 0;
foreach ($numbers1 as $number)
{
    $sum += $number;
}
$average = $sum/count($numbers1);
echo "average value of the numbers = " . $average . "\n";
//exercise 3
$numbers2 = [
      1789, 2035, 1899, 1456, 2013,
      1458, 2458, 1254, 1472, 2365,
      1456, 2265, 1457, 2456
];
$searched = readline("Enter the value to search for: ");
if(in_array($searched, $numbers2))
{
    echo "Array contains ". $searched;
}
else
{
    echo "Array doesnt contain ". $searched;
}
//exercise 4
echo "\n";
$firstarray = [];
$secondarray = [];
for ($i = 0; $i < 10; $i++) {
    $firstarray[] = rand(1, 100);
}
for ($i = 0; $i <  count($firstarray); $i++)
{
    $secondarray[$i] = $firstarray[$i];
}
$firstarray[count($firstarray)-1] = -7;
function printarrays($array)
{
    $output = "";
    foreach ($array as $value)
    {
        $output .= $value . " ";
    }
    return $output;
};
echo "array 1: " . printarrays($firstarray) . "\n" ;
echo "array 2: " . printarrays($secondarray). "\n" ;
//exercise 5

function display_board($board)
{
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            echo $board[$i][$j] . " ";
        }
        echo "\n";
    }
}
function check_winner($board)
{
    // Check rows and columns
    for ($i = 0; $i < 3; $i++) {
        if ($board[$i][0] != '_' && $board[$i][0] == $board[$i][1] && $board[$i][1] == $board[$i][2]) return $board[$i][0];
        if ($board[0][$i] != '_' && $board[0][$i] == $board[1][$i] && $board[1][$i] == $board[2][$i]) return $board[0][$i];
    }
    // Check diagonals
    if ($board[0][0] != '_' && $board[0][0] == $board[1][1] && $board[1][1] == $board[2][2]) return $board[0][0];
    if ($board[0][2] != '_' && $board[0][2] == $board[1][1] && $board[1][1] == $board[2][0]) return $board[0][2];

    // Check for tie
    foreach ($board as $row) {
        if (in_array('_', $row)) return '';
    }
    return 'tie';
}
function checkWinner($board)
{
    // Check rows and columns
    for ($i = 0; $i < 3; $i++) {
        if ($board[$i][0] != '_' && $board[$i][0] == $board[$i][1] && $board[$i][1] == $board[$i][2]) return $board[$i][0];
        if ($board[0][$i] != '_' && $board[0][$i] == $board[1][$i] && $board[1][$i] == $board[2][$i]) return $board[0][$i];
    }
    // Check diagonals
    if ($board[0][0] != '_' && $board[0][0] == $board[1][1] && $board[1][1] == $board[2][2]) return $board[0][0];
    if ($board[0][2] != '_' && $board[0][2] == $board[1][1] && $board[1][1] == $board[2][0]) return $board[0][2];

    // Check for tie
    foreach ($board as $row) {
        if (in_array('_', $row)) return '';
    }
    return 'tie';
}
function playtictactoe()
{
    $board = [
      ['_', '_', '_'],
      ['_', '_', '_'],
      ['_', '_', '_']
];
    $player = 'X';
    while(true)
    {
        display_board($board);

        $input = readline("choose location row,column: ");
        $inputArray = explode(",", $input);
        $row = $inputArray[1];
        $column = $inputArray[0];
        if ($row > 2 || $column > 2 || $row < 0||$column < 0 )
        {
            echo "Invalid input (use only numbers 0,1,2)\n";
            continue;
        }
        if ($board[$row][$column] !== '_')
        {
            echo "Invalid input (location not empty)\n";
            continue;
        }
        $board[$row][$column] = $player;
        if ($player === "X")
        {
            $player = "O";
        }
        else
        {
            $player = "X";
        }
        $result = checkWinner($board);
        if ($result == 'tie') {
            display_board($board);
            echo "Its a tie.\n";
            break;
        } elseif ($result != '') {
            display_board($board);
            echo "player '$result' wins!\n";
            break;
        }
    }
}
playtictactoe();
//exercise 8
$WordList = ["BEAR","ICECREAM", "TRAIN", "INTERNET"];
$randomNumber = rand(0, count($WordList) - 1);
$WordToGuess = str_split($WordList[$randomNumber]);
$HiddenWord = [];
for ($i = 0; $i < count($WordToGuess); $i++)
{
    $HiddenWord[$i] = "_";
}
$AvailableGuesses = count($WordToGuess);
while($AvailableGuesses > 0)
{
    echo "you have " . $AvailableGuesses . " guesses left\n";
    echo "Word: " . implode(" ", $HiddenWord);
    $guess = readline("guess a letter: ");
    $AvailableGuesses--;
    for ($i = 0; $i < count($WordToGuess); $i++)
    {
        if ($guess == $WordToGuess[$i])
        {
            $HiddenWord[$i] = $guess;
        }
    }
    if (!in_array("_", $HiddenWord)) {
        echo "You guessed the word: " . implode("", $WordToGuess) . "\n";
        break;
    }
    if ($AvailableGuesses === 0)
    {
        echo "You have run out of guesses, the word was : " . implode("", $WordToGuess) . "\n";
        break;
    }
}