<?php

namespace Spaceinvoices;

class Clients extends ApiResource {
  const path = "clients";

  use ApiOperations\All;
	use ApiOperations\Create;
	use ApiOperations\Delete;
	use ApiOperations\Edit;
	use ApiOperations\GetById;

  /**
   * @param string $organizationId ID of organization
   * @param string $searchTerm 	String term to search for in Client properties
   *
   * @return object Returns list of clients
  */
  public static function search($organizationId, $searchTerm) {
    return parent::_GET("/organizations/".$organizationId."/search-clients?term=".$searchTerm)->body;
  }

}
?>