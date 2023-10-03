<?php

class Bird {
  public $commonName;
  public $latinName;

  public function __construct($args=[]) {
    $this->commonName = $args['commonName'] ?? NULL;
    $this->latinName = $args['latinName'] ?? NUll;
  }
}

$flycatcher = new Bird(['commonName'=>'Arcadian Flycatcher', 'latinName'=>'Empidonax virescens']);
$wren = new Bird(['commonName'=>'Carolina Wren', 'latinName'=>'Thryothorus ludovicianus']);

echo "Common name: " . $flycatcher->commonName . "<br>";
echo "Latin name: " . $flycatcher->latinName . "<br>";
echo "<hr>";
echo "Common name: " . $wren->commonName . "<br>";
echo "Latin name: " . $wren->latinName . "<br>";