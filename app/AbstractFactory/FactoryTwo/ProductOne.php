<?php

namespace App\AbstractFactory\FactoryTwo;

use App\AbstractFactory\Interfaces\IProductOne;

class ProductOne implements IProductOne{
  public function getName() {
    return 'I am a FactoryTwo\'s Product One';
  }
}