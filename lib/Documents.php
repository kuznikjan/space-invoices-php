<?php

namespace Spaceinvoices;

class Documents extends ApiResource {
	public static function create($organizationId,$data) {
		return parent::_POST("/organizations/".$organizationId."/documents",$data);
	}

	public static function all($organizationId) {
		return parent::_GET("/organizations/".$organizationId."/documents");
	}

	public static function getById($documentId) {
		return parent::_GET("/documents/".$documentId);
	}

	public static function edit($documentId, $data) {
		return parent::_PUT("/documents/".$documentId, $data);
	}

	public static function delete($documentId) {
		return parent::_DELETE("/documents/".$documentId);
	}
}
?>