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

