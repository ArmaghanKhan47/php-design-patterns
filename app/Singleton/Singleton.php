<?php

namespace App\Singleton;

class Singleton {
  private static $instance;

  private function __construct() {
  }

  public static function getInstance() {
    if (static::$instance) {
      return static::$instance;
    }

    static::$instance = new static();
    return static::$instance;
  }

  public function getType() {
    return 'Singleton Pattern';
  }
}