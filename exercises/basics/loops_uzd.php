<?php
//Exercise 1
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
foreach ($numbers as $number)
{
    echo $number . " ";
}
echo"\n";
//Exercise 2
$numbers2 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
for ($i = 0; $i < count($numbers2); $i++)
{
    echo $numbers2[$i] . " ";
}
echo"\n";
//Exercise 3
$x = 1;
while($x<10)
{
echo "codelex". "\n";
$x++;
}
echo"\n";
//Exercise 4
$numbers3 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
foreach ($numbers3 as $number){
    if($number % 3 === 0)
    {
        echo $number . " ";
    }
}
echo"\n";
//Exercise 5
$items = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 14,
            "birthday" => "2010-10-10"
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 24,
            "birthday" => "2000-11-11"
        ],
        [
            "name" => "Big",
            "surname" => "Ben",
            "age" => 34,
            "birthday" => "1990-10-10"
        ],
        [
            "name" => "John",
            "surname" => "Jones",
            "age" => 44,
            "birthday" => "1980-10-10"
        ],
    ]
];
for ($i = 0; $i < count($items[0]); $i++)
{
    echo $items[0][$i]["name"] . " "
        . $items[0][$i]["surname"] . " "
        . $items[0][$i]["age"] . " "
        . $items[0][$i]["birthday"]
        . "\n";
}