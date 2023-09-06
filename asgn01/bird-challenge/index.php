<?php

class Bird {

  var $commonName;
  var $food = "bugs";
  var $nestPlacement = "tree";
  var $conservationLevel;

  function song($value) {
    return $value;
  }

  function canFly() {
    return "This bird can fly";
  }
}

$bird1 = new Bird;
$bird2 = new Bird;

$bird1->commonName = "Eastern Towhee";
$bird1->food = "seeds, fruits, insects, spiders";
$bird1->nestPlacement = "Ground";
$bird1->conservationLevel = "Low";

$bird2->commonName = "Indigo Bunting";
$bird2->food = "small seeds, berries, buds, and insects";
$bird2->nestPlacement = " roadsides, and railroad rights-of-wafields and on the edges of woods";
$bird2->conservationLevel = "Low";


echo "Properties<br>
_____________<br>
commonName = " . $bird1->commonName . "<br>
food = " . $bird1->food . "<br>
nestPlacement = " . $bird1->nestPlacement . "<br>
conservationLevel = " .$bird1->conservationLevel. "<br>
<br>
Methods<br>
____________________________________________________<br>
song = " . $bird1->song("drink-your-tea!") . "<br>
canFly = " . $bird1->canFly() . "<br><br><br>";


echo "Properties<br>
_____________<br>
commonName = " . $bird2->commonName . "<br>
food = " . $bird2->food . "<br>
nestPlacement = " . $bird2->nestPlacement . "<br>
conservationLevel = " .$bird2->conservationLevel. "<br>
<br>
Methods<br>
____________________________________________________<br>
song = " . $bird2->song("what!") . "<br>
canFly = " . $bird2->canFly() . "<br>";
