<?php

namespace Spaceinvoices;

class Countries extends ApiResource {
  const path = "countries";

  /**
   * @return object Returns all data as object
  */
  public static function find() {
    return parent::_GET("/".static::path)->body;
  }
}
?>