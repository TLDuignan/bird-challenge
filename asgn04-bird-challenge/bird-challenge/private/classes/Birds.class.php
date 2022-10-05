<?php
  class Birds {
    public $common_name;
    public $habitat;
    public $food;
    public $nest_placement;
    public $behavoir;
    public $conservation_id;
    public $backyard_tips;
    protected const  conservation_level = [
      1 => 'low',
      2 => 'moderate',
      3 => 'high',
      4 => 'extreme'
    ];

    public function __construct($argms=[]) {
      $this->common_name = $argms['common_name'] ?? '';
      $this->habitat = $argms['habitat'] ?? '';
      $this->food = $argms['food'] ?? '';
      $this->nest_placement = $argms['nest_placement'] ?? '';
      $this->behavior = $argms['behavior'] ?? '';
      $this->conservatin_id = $conservation_id['conservation_id'] ?? '';
      $this->backyard_tips = $argms['backyard_tips'] ?? '';
    }

    public function conservation() {
      if($this->conservation_id > 0) {
        return self::conservation_level[$this->conservation_id];
      } else {
        return "Unknown";
      }
    }
  } 


