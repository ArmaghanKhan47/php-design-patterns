<?php

namespace App\FactoryMethod;

class Product {
  private $name, $type;
  public function __construct($name, $type) {
    $this->name = $name;
    $this->type = $type;
  }

  public function getDetails() {
    return "$this->name - $this->type";
  }

  public function __toString() {
    return $this->getDetails();
  }
}