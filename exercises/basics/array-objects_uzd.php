<?php
//Exercise 1
$numbers =[1 ,2 ,3];
echo"array summa ". array_sum($numbers) . "\n";
//Exercise 2

$person = [
    "name" => "John",
    "surname" => "Doe",
    "age" => 50
];
var_dump($person);

//Exercise 3

$person1 = new stdClass();
$person1->name = "John";
$person1->surname = "Doe";
$person1->age = 50;

var_dump($person1);

//Exercise 4

$items = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]
];
$name = $items[0][1]["name"];
$surname = $items[0][1]["surname"];
$age = $items[0][1]["age"];
$concatenated_value = $name . " " . $surname . " " . $age . "\n";
echo $concatenated_value;

//Exercise 5

$items1 = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]
];
for ($i = 0; $i <= count($items1); $i++)
{
    echo $items1[0][$i]["name"] . " " . $items1[0][$i]["surname"] . " " . $items1[0][$i]["age"]. " " ;
}