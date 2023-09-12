<?php

class Food {

  var $name;
  var $calories;
  var $color;
  var $canSpoil = false;
  var $lifeTimeDays = 30;
  var $age = 0;

  function eat() {
    if($this->canSpoil && $this->age >= $this->lifeTimeDays){
      echo "You can't eat this " . $this->name . " because it is spoiled! <br>";
    } else {
      echo "You ate this " . $this->name . " and got " .$this->calories. " calories. <br>";
    }
  }
}

class Pastry extends Food {

  var $canSpoil = true;
  var $grain = "Flour";

  function bake() {
    $this->age = 0;
    echo "You baked some " . $this->grain . " dough and made a " . $this->name . "! <br>";
  }
}

class Fruit extends Food {

  var $canSpoil = true;
  var $numSeeds = 0;

  function eat() {
    parent::eat();
    if($this->numSeeds > 0){
      echo "And you spat out " . $this->numSeeds . " seeds! <br>";
    }
  }
}

$doughNut = new Pastry;
$doughNut->name = "Doughnut";
$doughNut->color = "Pink";
$doughNut->calories = 260;
$doughNut->bake();
$doughNut->eat();

$apple = new Fruit;
$apple->name = "Apple";
$apple->color = "Red";
$apple->calories = 95;
$apple->numSeeds = 2;
$apple->eat();
