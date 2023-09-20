<?php

use Bird as GlobalBird;

class Bird {
    var $habitat;
    var $food;
    var $nesting = "tree";
    var $conservation;
    var $song = "chirp";
    var $flying = "yes";
    static $instance_count = 0;
    static $egg_num = 0;

    function can_fly() {
        return ($this->flying == "yes" ) ? "can fly" : "is stuck on the ground";
    }
    
    static function create() {
      $class_name = get_called_class();
      $obj = new $class_name;

      Bird::$instance_count++;
      return $obj;
    }
}

class YellowBelliedFlyCatcher extends Bird {
    var $name = "yellow-bellied flycatcher";
    var $diet = "mostly insects.";
    var $song = "flat chilk";
    static $egg_num = "3-4, sometimes 5.";
}

class Kiwi extends Bird {
    var $name = "kiwi";
    var $diet = "omnivorous";
    var $flying = "no";
}
