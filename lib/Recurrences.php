<?php

namespace Spaceinvoices;

class Recurrences extends ApiResource {
  const path = "recurrences";

  use ApiOperations\All;
	use ApiOperations\Delete;

  /**
   * @param string $documentId ID of Document for which we are creting the Recurrence
   * @param object $data
   *
   * @return object Returns object data of created Recurrence
  */
  public static function create($documentId, $data) {
    return parent::_POST("/documents/".$documentId."/recurrence", $data)->body;
  }
}
?>