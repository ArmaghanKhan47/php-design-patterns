<?php

namespace App\AbstractFactory\FactoryTwo;

use App\AbstractFactory\Interfaces\IProductTwo;

class ProductTwo implements IProductTwo{
  public function getType() {
    return 'I am a FactoryTwo\'s Product Two';
  }
}