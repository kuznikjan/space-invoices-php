<?php
namespace Spaceinvoices\ApiOperations;

trait All
{
  /**
   * @param string $organizationId ID of your Organization
   * @param object $queryParams Object containing query filters
   *
   * @return object Returns all data as object
  */
  public static function all($organizationId, $queryParams) {
    return parent::_GET("/organizations/".$organizationId."/".static::path, $queryParams)->body;
  }

}
?>