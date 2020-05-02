<?php

  class Mouse {

    private $name;
    private $baseGold;
    private $basePoints;
    private $strength;

    public function __construct($name, $baseGold, $basePoints, $strength) {
      $this->name = $name;
      $this->baseGold = $baseGold;
      $this->basePoints = $basePoints;
      $this->strength = $strength;
    }

    public function getName() {
      return $this->name;
    }
    
  }

?>