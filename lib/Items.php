<?php

namespace Spaceinvoices;

class Items extends ApiResource {
  const path = "items";

  use ApiOperations\All;
	use ApiOperations\Create;
	use ApiOperations\Delete;
	use ApiOperations\Edit;

  /**
   * @param string $organizationId ID of organization
   * @param string $searchTerm String term to search for in Item properties
   *
   * @return object Returns list of items
  */
  public static function search($organizationId, $searchTerm) {
    return parent::_GET("/organizations/".$organizationId."/search-items?term=".$searchTerm)->body;
  }

}
?>