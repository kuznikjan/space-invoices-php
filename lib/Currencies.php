<?php

namespace Spaceinvoices;

class Currencies extends ApiResource {
	const path = "currencies";

  /**
   * @return object Returns list of currencies
  */
  public static function all() {
    return parent::_GET("/".static::path)->body;
  }

}
?>