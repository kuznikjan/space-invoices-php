<?php

namespace Spaceinvoices;

class Companies extends ApiResource {
  const path = "companies";

  /**
   * @param object $filter Object containing query filters
   *
   * @return object Returns list of companies
  */
  public static function all($filter = array()) {
    return parent::_GET("/".static::path, $filter)->body;
  }

  /**
   * @param string $searchTerm String term to search for in Companies properties
   * @param object $filter Object containing query filters
   *
   * @return object Returns list of companies
  */
  public static function search($searchTerm, $filter = array()) {
    return parent::_GET("/".static::path."/search?term=".$searchTerm, $filter)->body;
  }

}
?>