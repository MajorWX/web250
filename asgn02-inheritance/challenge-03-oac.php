<?php

class Bicycle {

  public $brand;
  public $model;
  public $year;
  public $description = 'Used bicycle';
  private $weight_kg = 0.0;
  protected $wheels = 2;

  public function name(){
    return $this->brand . " " . $this->model . " (" . $this->year . ")";
  }

  public function weight_lbs() {
    return floatval($this->weight_kg) * 2.2046226218 . " lbs";
  }

  public function set_weight_lbs($value) {
    $this->weight_kg = floatval($value) / 2.2046226218;
  }

  public function wheel_details() {
    return "It has " . $this->wheels . " wheels.";
  }

  public function set_weight_kg($value) {
    $this->weight_kg = floatval($value);
  }

  public function get_weight_kg() {
    return $this->weight_kg . " kg";
  }
}

class Unicycle extends Bicycle {

  public $description = 'Used unicycle';
  protected $wheels = 1;

}

$trek = new Bicycle;
$trek->brand = 'Trek';
$trek->model = 'Emonda';
$trek->year = '2017';

$uni = new Unicycle;

echo "Bicycle: " . $trek->wheel_details() . "<br />";
echo "Unicycle: " . $uni->wheel_details() . "<br />";
echo "<hr />";

echo "Set weight using kg<br />";
$trek->set_weight_kg(1);
echo $trek->weight_kg() . "<br />";
echo $trek->weight_lbs() . "<br />";
echo "<hr />";

echo "Set weight using lbs<br />";
$trek->set_weight_lbs(2);
echo $trek->weight_kg() . "<br />";
echo $trek->weight_lbs() . "<br />";
echo "<hr />";
