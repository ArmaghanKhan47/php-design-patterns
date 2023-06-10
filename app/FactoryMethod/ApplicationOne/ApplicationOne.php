<?php

namespace App\FactoryMethod\ApplicationOne;

use App\FactoryMethod\IFramework;

class ApplicationOne implements IFramework {

  public function makeProduct(){
    return new ProductOne('Product', 'One');
  }
}