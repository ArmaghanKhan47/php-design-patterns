<?php

namespace App\AbstractFactory\FactoryTwo;

use App\AbstractFactory\Interfaces\IFactory;

class FactoryTwo implements IFactory{
  public function makeProductOne(){
    return new ProductOne();
  }

  public function makeProductTwo(){
    return new ProductTwo();
  }
}