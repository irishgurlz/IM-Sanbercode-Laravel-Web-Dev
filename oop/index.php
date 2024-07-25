<?php
require_once('animal.php');
require_once('ape.php');
require_once('frog.php');

$sheep = new Animal("shaun");

echo "Name : " . $sheep->getName() . "<br>"; // "shaun"
echo "Legs : " . $sheep->getLegs() . "<br>"; // 4
echo "Cold Blooded : " . $sheep->getColdBlooded() . "<br> <br>"; // "no"

$kodok = new Frog("buduk");
echo "Name : " . $kodok->getName() . "<br>"; // "buduk"
echo "Legs : " . $kodok->getLegs() . "<br>"; // 2
echo "Cold Blooded : " . $kodok->getColdBlooded() . "<br>"; // no
$kodok->jump(); 

echo "<br><br>";

$sungokong = new Ape("kera sakti");
echo "Name : " . $sungokong->getName() . "<br>"; // "kera sakti"
echo "Legs : " . $sungokong->getLegs() . "<br>"; // 4
echo "Cold Blooded : " . $sungokong->getColdBlooded() . "<br>"; // no
$sungokong->yell(); 


?>
