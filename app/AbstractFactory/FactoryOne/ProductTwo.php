<?php

namespace App\AbstractFactory\FactoryOne;

use App\AbstractFactory\Interfaces\IProductTwo;

class ProductTwo implements IProductTwo{
  public function getType() {
    return 'I am a FactoryOne\'s Product Two';
  }
}