<?php
//###### Exercise 7**
class Person {
    public $name;
    public $licenses = array();
    public $cash;
    public function __construct($name, $licenses, $cash) {
        $this->name = $name;
        $this->licenses = $licenses;
        $this->cash = $cash;
    }
}
class Gun {
    public $name;
    public $licenseRequired;
    public $price;
    public function __construct($name, $licenseRequired, $price) {
        $this->name = $name;
        $this->licenseRequired = $licenseRequired;
        $this->price = $price;
    }
}
function canBuy($person, $gun)
{
    if (!in_array($gun->licenseRequired, $person->licenses)) {
        echo $person->name . " doesnt have the  license to buy " . $gun->name . ".\n";
        return false;
    }
    if ($person->cash < $gun->price) {
        echo $person->name . " doesnt have enough cash to buy " . $gun->name . ".\n";
        return false;
    }
    echo $person->name . " can buy " . $gun->name . ".\n";
    return true;
}
$guns = array(
      new Gun("Glock Hndgun", "A", 700),
      new Gun("MSMC MachineGun", "B", 1500),
      new Gun("DSR-50 Sniper", "C", 5000)
);
$person = new Person("Arthur", array("A", "B"), 2500);
for ($i = 0; $i < count($guns); $i++)
{
    canBuy($person, $guns[$i]);
}