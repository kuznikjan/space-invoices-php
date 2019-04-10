<?php

namespace Spaceinvoices;

class Organizations extends ApiResource {
  const path = "organizations";

  use ApiOperations\GetById;

  /**
   * @param string $accountId ID of Account
   * @param object $data
   *
   * @return object Returns data of created Organization
  */
  public static function create($accountId, $data) {
    return parent::_POST("/accounts/".$accountId."/".static::path, $data)->body;
  }

  /**
   * @param string $accountId ID of Account
   *
   * @return object Returns list of Organizations
  */
  public static function find($accountId) {
    return parent::_GET("/accounts/".$accountId."/".static::path)->body;
  }

  /**
   * @param string $organizationId 	ID of Organization to set image for
   * @param string $type The type of image we are uploading
   * @param string $image Path to image (absolute path)
   *
   * @return boolean Boolean true if request was succesful
  */
  public static function uploadImage($organizationId, $image, $type = "logo") {
    return parent::_IMG("/".static::path."/".$organizationId."/upload-image?type=".$type, $image, $type)->body;
  }

    /**
   * @param string $organizationId 	ID of Organization
   *
   * @return object Returns list of Business Premises
  */
  public static function getBusinessPremises($organizationId) {
    return parent::_GET("/".static::path."/".$organizationId."/businessPremises?filter[include]=electronicDevices")->body;
  }

}
?>