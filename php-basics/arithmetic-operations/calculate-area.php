<?php

echo "Geometry Calculator\n";
echo "1. Calculate the Area of a Circle\n";
echo "2. Calculate the Area of a Rectangle\n";
echo "3. Calculate the Area of a Triangle\n";
echo "4. Quit\n";
$choice = readline("Enter your choice (1-4) : ");
switch ($choice) {
    case "1":
        $radius = readline("Enter circles radius ");
        $answer = 3.14 * ($radius * $radius);
        echo "radius of circle is $answer\n";
        break;
    case "2":
        "";
        break;
    case "3":
        echo "";
        break;
    default:

}