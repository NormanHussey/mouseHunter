<?php

  abstract class Trap {
    protected $name;
    protected $img;
    protected $luck;
    protected $power;
    protected $attraction;
    protected $bait;

    public function __construct($name, $img, $luck, $power, $attraction, $bait = false) {
      $this->name = $name;
      $this->img = $img;
      $this->luck = $luck;
      $this->power = $power;
      $this->attraction = $attraction;
      $this->bait = $bait;
    }

    public function getName() {
      return $this->name;
    }

    public function getImg() {
      return $this->img;
    }

    public function getLuck() {
      return $this->luck;
    }

    public function getPower() {
      return $this->name;
    }

    public function getAttraction() {
      return $this->name;
    }

    public function setBait($bait) {
      $this->bait = $bait;
    }

  }

  class HotTub extends Trap {
    public function __construct($bait = false) {
      parent::__construct('Mouse Hot Tub', '', 2, 5, 10, $bait);
    }
  }

  class SpikedCrusher extends Trap {
    public function __construct($bait = false) {
      parent::__construct('Spiked Crusher', '', 1, 10, 5, $bait);
    }
  }

  class CoiledSpringer extends Trap {
    public function __construct($bait = false) {
      parent::__construct('Coiled Springer', '', 3, 7, 7, $bait);
    }
  }

?>