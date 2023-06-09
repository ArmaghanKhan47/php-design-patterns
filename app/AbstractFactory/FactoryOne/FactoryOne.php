<?php

namespace App\AbstractFactory\FactoryOne;

use App\AbstractFactory\Interfaces\IFactory;

class FactoryOne implements IFactory{
  public function makeProductOne(){
    return new ProductOne();
  }

  public function makeProductTwo(){
    return new ProductTwo();
  }
}