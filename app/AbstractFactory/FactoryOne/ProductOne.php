<?php

namespace App\AbstractFactory\FactoryOne;

use App\AbstractFactory\Interfaces\IProductOne;

class ProductOne implements IProductOne{
  public function getName() {
    return 'I am a FactoryOne\'s ProductOne';
  }
}