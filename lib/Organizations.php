<?php

namespace Spaceinvoices;

class Organizations extends ApiResource {
	const path = "organizations";

  /**
   * @param string $accountId ID of account
   * @param object $data
   *
   * @return object Returns data of created organization
  */
  public static function create($accountId, $data) {
    return parent::_POST("/accounts/".$accountId."/".static::path, $data)->body;
  }

  /**
   * @param string $accountId ID of account
   *
   * @return object Returns list of organizations
  */
  public static function all($accountId) {
    return parent::_GET("/accounts/".$accountId."/".static::path)->body;
  }

}
?>