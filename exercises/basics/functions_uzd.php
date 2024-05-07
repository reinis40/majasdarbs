<?php
###### Exercise 1

////Create a function that accepts any string and returns the same value with added "codelex" by the end of it.
////Print this value out.

function returnstring(string $stringtext): string
{
    return $stringtext . " codelex";
}

//###### Exercise 2
//Create a function that accepts 2 integer arguments. First argument is a base value and the second one is a value its been multiplied by.
////For example, given argument 10 and 5 prints out 50
function MultiplyNumber(int $Int1, int $Int2): string
{
    return  $Int1 * $Int2;
}
echo MultiplyNumber(5,2) . "\n";

//###### Exercise 3
$person = (object) [
      'name' => 'John',
      'surname' => 'Doe',
      'age' => 19
];
function IsPersonEighteen(object $personobject):string {
    if ($personobject->age >= 18) {
        return "$personobject->name has reached the age of 18 or older.\n";
    }
    return "$personobject->name has not reached the age of 18 yet.\n";
}
echo IsPersonEighteen($person);

//###### Exercise 4
//
//Create a array of objects that uses the function of exercise 3 but in loop printing out if the person has reached age of 18.
$persons = [
      (object)[
            'name' => 'John',
            'surname' => 'Doe',
            'age' => 16
      ],
      (object)[
            'name' => 'Big',
            'surname' => 'Ben',
            'age' => 19
      ],
      (object)[
            'name' => 'Jack',
            'surname' => 'Jones',
            'age' => 12
      ],
      (object)[
            'name' => 'Sydney',
            'surname' => 'Sweeny',
            'age' => 78
      ]
];
foreach ($persons as $personobject)
{
    echo IsPersonEighteen($personobject);
}
//###### Exercise 5
$fruits = array(
      "apple" => 8,
      "banana" => 12,
      "orange" => 6,
      "watermelon" => 15
);
function isOver10kg($weight)
{
    return $weight > 10;
}
$shippingCosts = array(
      "under_10kg" => 1,
      "over_10kg" => 2
);
foreach ($fruits as $fruit => $weight) {
    $cost = isOver10kg($weight) ? $shippingCosts["over_10kg"] : $shippingCosts["under_10kg"];
    echo "Fruit: " . ucfirst($fruit) . ", Weight: " . $weight . "kg, Shipping Cost: " . $cost . " euro\n";
}
//###### Exercise 6
$array = array(5, 15, "Reinis", 3.9, 42);
function doubleInt($number)
{
    if (is_int($number)) {
        return $number * 2;
    } else {
        return $number;
    }
}
for ($i = 0; $i < count($array); $i++) {
echo doubleInt($array[$i]) . "\n";
}


