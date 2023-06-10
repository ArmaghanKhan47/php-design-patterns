<?php

namespace App\FactoryMethod\ApplicationOne;

use App\FactoryMethod\Product;

class ProductOne extends Product {
  public function extraBehavior() {
    return 'this is extra behavior of product one';
  }
}