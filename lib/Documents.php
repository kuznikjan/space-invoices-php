<?php

namespace Spaceinvoices;

class Documents extends ApiResource {
	const path = "documents";

	use ApiOperations\All;
	use ApiOperations\Create;
	use ApiOperations\Delete;
	use ApiOperations\Edit;
	use ApiOperations\GetById;

  /**
   * @param string $documentId ID of document
   * @param object $data
	 * @param object $lang Language of document
   *
   * @return object
  */
  public static function send($documentId, $data, $lang) {
		if ($lang) {
			return parent::_POST("/".static::path."/".$documentId."/send?l=".$lang, $data)->body;
		}
    return parent::_POST("/".static::path."/".$documentId."/send", $data)->body;
	}

	/**
   * @param string $documentId ID of document
	 * @param object $lang Language of PDF document
   *
   * @return \Httpful\Response Returns object data of PDF of document
  */

	public static function getPdf($documentId, $lang = false) {
    return parent::_PDF("/".static::path."/".$documentId."/pdf", $lang);
  }
}
?>