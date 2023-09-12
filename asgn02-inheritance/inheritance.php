<?php

class Food {

  public $name;
  public $calories;
  public $color;
  public $canSpoil = false;
  public $lifeTimeDays = 30;
  public $age = 0;

  public function eat() {
    if($this->canSpoil && $this->age >= $this->lifeTimeDays){
      echo "You can't eat this " . $this->name . " because it is spoiled! <br>";
    } else {
      echo "You ate this " . $this->name . " and got " .$this->calories. " calories. <br>";
    }
  }
}

class Pastry extends Food {

  public $canSpoil = true;
  public $grain = "Flour";

  public function bake() {
    $this->age = 0;
    echo "You baked some " . $this->grain . " dough and made a " . $this->name . "! <br>";
  }
}

class Fruit extends Food {

  public $canSpoil = true;
  private $numSeeds = 0;

  public function eat() {
    parent::eat();
    if($this->numSeeds > 0){
      echo "And you spat out " . $this->numSeeds . " seeds! <br>";
    }
  }

  public function setNumSeeds($value) {
    $this->numSeeds = $value;
  }

  public function getNumSeeds() {
    return $this->numSeeds;
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
$apple->setNumSeeds(2);
$apple->eat();
